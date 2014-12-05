<?php

namespace Weleoka\Crssb;

/**
 * A testclass for CRSSB
 * 
 */
class CrssbTest extends \PHPUnit_Framework_TestCase {

    /**
     * Construct the Test dependency object.
     *
     * @param string $feedUrls giving the service its data input.
     *
     */	
	public function __construct() {
		$this->urlBad = 'this is not a url';
		$this->urlGood = 'http://feeds.feedburner.com/TechCrunch/';
		$this->el = new \Weleoka\Crssb\Crssb( $this->urlGood );
	}
	
    /**
     * Test the crssb Constructor.
     *
     * @expectedException Exception
     * @return void
     *
     */
    public function testCreateElement() 
    {
    	  echo "\n testCreateElement:\n";
    	  $element = new \Weleoka\Crssb\Crssb( $this->urlBad );
    }
    
    /**
     * Test setURL().
     *
     * @expectedException Exception
     * @return void
     *
     */
    public function testSetURL() 
    {	  	 
    	  echo "\n testSetURL:\n";
        $this->el->setURL( $this->urlBad );
    }
    
    /**
     * Test setCache().
     *
     * @expectedException Exception
     * @return void
     *
     */
    public function testSetCache() 
    {
    	  echo "\n testSetCache:\n";
    	  $this->el->setCache( '/not-writable' );
    }
    
    /**
     * Test printFeed
     *
     * @return void
     *
     */
    public function testPrintFeed()
    {		
    	  echo "\n testPrintFeed:\n";
        $res = $this->el->printFeed();
        $this->assertStringEndsWith('</div>', $res);
    }
    
    /**
     * Test oneFeed
     *
     * @return void
     *
     */
    public function testOneFeed()
    {		
    	  echo "\n testOneFeed:\n";
        $res = $this->el->oneFeed();
        $this->assertStringEndsWith('</div>', $res);
    }
    
    /**
     * Test streamlineFeed
     *
     * @return void
     *
     */
    public function testStreamlineFeed()
    {		
    	  echo "\n testStreamlineFeed:\n";
        $res = $this->el->streamlineFeed();
        $this->assertStringEndsWith('</div>', $res);
    }
}








