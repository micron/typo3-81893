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
class Tile extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * headline
     *
     * @var string
     */
    protected $headline = '';

    /**
     * subheadline
     *
     * @var string
     */
    protected $subheadline = '';

    /**
     * moreInfoLink
     *
     * @var string
     */
    protected $moreInfoLink = '';

    /**
     * moreInfoLinkText
     *
     * @var string
     */
    protected $moreInfoLinkText = '';

    /**
     * slideImage
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $tileImage = null;

    /**
     * bgColor
     *
     * @var string
     */
    protected $bgColor = '';

    /**
     * textColor
     *
     * @var string
     */
    protected $textColor = '';

    /**
     * isFeatured
     *
     * @var int
     */
    protected $isFeature = '';

    /**
     * @return string
     */
    public function getTextColor(): string
    {
        return $this->textColor;
    }

    /**
     * @param string $textColor
     */
    public function setTextColor(string $textColor): void
    {
        $this->textColor = $textColor;
    }

    /**
     * @return int
     */
    public function getIsFeature()
    {
        return $this->isFeature;
    }

    /**
     * @param int $isFeature
     */
    public function setIsFeature($isFeature): void
    {
        $this->isFeature = $isFeature;
    }

    /**
     * Returns the headline
     *
     * @return string $headline
     */
    public function getHeadline()
    {
        return $this->headline;
    }

    /**
     * Sets the headline
     *
     * @param string $headline
     * @return void
     */
    public function setHeadline($headline)
    {
        $this->headline = $headline;
    }

    /**
     * Returns the subheadline
     *
     * @return string $subheadline
     */
    public function getSubheadline()
    {
        return $this->subheadline;
    }

    /**
     * Sets the subheadline
     *
     * @param string $subheadline
     * @return void
     */
    public function setSubheadline($subheadline)
    {
        $this->subheadline = $subheadline;
    }

    /**
     * Returns the moreInfoLink
     *
     * @return string $moreInfoLink
     */
    public function getMoreInfoLink()
    {
        return $this->moreInfoLink;
    }

    /**
     * Sets the moreInfoLink
     *
     * @param string $moreInfoLink
     * @return void
     */
    public function setMoreInfoLink($moreInfoLink)
    {
        $this->moreInfoLink = $moreInfoLink;
    }

    /**
     * Returns the moreInfoLinkText
     *
     * @return string $moreInfoLinkText
     */
    public function getMoreInfoLinkText()
    {
        return $this->moreInfoLinkText;
    }

    /**
     * Sets the moreInfoLinkText
     *
     * @param string $moreInfoLinkText
     * @return void
     */
    public function setMoreInfoLinkText($moreInfoLinkText)
    {
        $this->moreInfoLinkText = $moreInfoLinkText;
    }

    /**
     * Returns the allServicesLink
     *
     * @return string $allServicesLink
     */
    public function getAllServicesLink()
    {
        return $this->allServicesLink;
    }

    /**
     * Sets the allServicesLink
     *
     * @param string $allServicesLink
     * @return void
     */
    public function setAllServicesLink($allServicesLink)
    {
        $this->allServicesLink = $allServicesLink;
    }

    /**
     * Returns the slideImage
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $slideImage
     */
    public function getTileImage()
    {
        return $this->tileImage;
    }

    /**
     * Sets the slideImage
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $tileImage
     * @return void
     */
    public function setTileImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $tileImage)
    {
        $this->tileImage = $tileImage;
    }

    /**
     * Returns the bgColor
     *
     * @return string $bgColor
     */
    public function getBgColor()
    {
        return $this->bgColor;
    }

    /**
     * Sets the bgColor
     *
     * @param string $bgColor
     * @return void
     */
    public function setBgColor($bgColor)
    {
        $this->bgColor = $bgColor;
    }
}
