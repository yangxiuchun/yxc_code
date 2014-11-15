<?php
class Spage extends Illuminate\Pagination\Presenter{
    /**
    * 获取分页可用连接HTML
    *
    * @param  string  $url
    * @param  int  $page
    * @param  string  $rel
    * @return string
    */
    public function getPageLinkWrapper($url, $page, $rel = null)
    {
        $rel = is_null($rel) ? '' : ' rel="'.$rel.'"';
        return '<a href="'.$url.'"'.$rel.'>'.$page.'</a>';
    }
    /**
    * 获取失效页HTML
    *
    * @param  string  $text
    * @return string
    */
    public function getDisabledTextWrapper($text)
    {
        return '<span class="disabled">'.$text.'</span>';
    }
    /**
    * 获取当前页HTML
    *
    * @param  string  $text
    * @return string
    */
    public function getActivePageWrapper($text)
    {
        return '<span class="current">'.$text.'</span>';
    } 
    /**
    * 获取分页HTML字符串
    * $minPageNum 最小省略分页个数
    * @return string
    */
    public function pageString($minPageNum=7)
    {
        if ($this->lastPage < $minPageNum)
        {
            $content = $this->getPageRange(1, $this->lastPage);
        }
        else
        {
            $content = $this->getPageSlider($minPageNum);
        }
        return $this->getHome().$this->getPrevious('上一页').$content.$this->getNext('下一页').$this->getEnd();
    }
    /**
    * 获取首页HTML
    *
    * @param  string  $text
    * @return string
    */
    public function getHome($text = '首页')
    {
        if ($this->currentPage <= 1)
        {
            return $this->getDisabledTextWrapper($text);
        }
        else
        {
            $url = $this->paginator->getUrl(1);
            return $this->getPageLinkWrapper($url, $text, 'prev');
        }
    }
    /**
    * 获取尾页HTML
    *
    * @param  string  $text
    * @return string
    */
    public function getEnd($text = '尾页')
    {
        if ($this->currentPage >= $this->lastPage)
        {
            return $this->getDisabledTextWrapper($text);
        }
        else
        {
            $url = $this->paginator->getUrl($this->lastPage);
            return $this->getPageLinkWrapper($url, $text, 'next');
        }
    }   
	/**
	 * Create a pagination slider link window.
	 *
	 * @return string
	 */
     
	protected function getPageSlider($window=7)
	{

		// If the current page is very close to the beginning of the page range, we will
		// just render the beginning of the page range, followed by the last 2 of the
		// links in this list, since we will not have room to create a full slider.
		if ($this->currentPage <= $window)
		{
			$ending = $this->getFinish();

			return $this->getPageRange(1, $window );
		}

		// If the current page is close to the ending of the page range we will just get
		// this first couple pages, followed by a larger window of these ending pages
		// since we're too close to the end of the list to create a full on slider.
		elseif ($this->currentPage >= $this->lastPage - $window)
		{
			$start = $this->lastPage - 6;

			$content = $this->getPageRange($start, $this->lastPage);

			return $content;
		}

		// If we have enough room on both sides of the current page to build a slider we
		// will surround it with both the beginning and ending caps, with this window
		// of pages in the middle providing a Google style sliding paginator setup.
		else
		{
			$content = $this->getAdjacentRange();

			return $content;
		}
	}
}