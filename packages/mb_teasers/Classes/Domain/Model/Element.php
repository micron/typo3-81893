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
class Element extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * headline
     *
     * @var string
     */
    protected $headline = '';

    /**
     * ttContentElement
     *
     * @var string
     */
    protected $ttContentElement = '';

    /**
     * @return string
     */
    public function getTtContentElement(): string
    {
        return $this->ttContentElement;
    }

    /**
     * @param string $ttContentElement
     */
    public function setTtContentElement(string $ttContentElement): void
    {
        $this->ttContentElement = $ttContentElement;
    }


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
}
