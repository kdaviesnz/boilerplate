<?php

/*
 And now we arrive at the component’s meat and potatoes—its implementation. This is where you write the PHP classes, interfaces, and traits that form the PHP compo‐ nent. What classes you write, and how many, depends entirely on the PHP compo‐ nent’s purpose. However, all component classes, interfaces, and traits must live in the src/ directory and exist beneath the component’s namespace prefix listed in the com‐ poser.json file.
 */
namespace League\Skeleton;

class SkeletonClass
{
    /**
     * Create a new Skeleton Instance
     */
    public function __construct()
    {
        // constructor body
    }

    /**
     * Friendly welcome
     *
     * @param string $phrase Phrase to return
     *
     * @return string Returns the phrase passed in
     */
    public function echoPhrase($phrase)
    {
        return $phrase;
    }
}
