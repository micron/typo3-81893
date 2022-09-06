<?php

namespace Mb\MbTeasers\Domain\Model;

/***
 *
 * This file is part of the "Kr slider" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2021 Ado Slider <malikzohaib404@gmail.com>, kreativrudel.de
 *
 ***/

/**
 * Slide
 */
class OverviewTitleTags extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{


    /**
     * title
     *
     * @var string
     */
    protected $title = '';


    /**
     * overviewTilesWithFilter
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Mb\MbTeasers\Domain\Model\OverviewTilesWithFilter>
     */
    protected $mbOverviewTilesWithFilter = '';


    /**
     * Returns the title
     *
     * @return string $title
     */
    public function gettitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function settitle($title)
    {
        $this->title = $title;
    }


    /**
     * Returns the overviewTilesWithFilter
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Mb\MbTeasers\Domain\Model\OverviewTilesWithFilter> $overviewTilesWithFilter
     */
    public function getMbOverviewTilesWithFilter()
    {
        return $this->mbOverviewTilesWithFilter;
    }

    /**
     * Sets the overviewTilesWithFilter
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $mbOverviewTilesWithFilter
     * @return void
     */
    public function setMbOverviewTilesWithFilter($mbOverviewTilesWithFilter)
    {
        $this->mbOverviewTilesWithFilter = $mbOverviewTilesWithFilter;
    }

    /**
     * Add image
     *
     * @param \Mb\MbTeasers\Domain\Model\OverviewTilesWithFilter $mbOverviewTilesWithFilter
     */
    public function addMbOverviewTilesWithFilter(\Mb\MbTeasers\Domain\Model\OverviewTilesWithFilter $mbOverviewTilesWithFilter)
    {
        $this->mbOverviewTilesWithFilter->attach($mbOverviewTilesWithFilter);
    }

    /**
     * Remove image
     *
     * @param \Mb\MbTeasers\Domain\Model\OverviewTilesWithFilter $mbOverviewTilesWithFilter
     */
    public function removeMbOverviewTilesWithFilter(\Mb\MbTeasers\Domain\Model\OverviewTilesWithFilter $mbOverviewTilesWithFilter)
    {
        $this->mbOverviewTilesWithFilter->detach($mbOverviewTilesWithFilter);
    }


}
