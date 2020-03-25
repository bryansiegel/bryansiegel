<?php

abstract class BaseAnalyzer {
	/**
	 * @var array<AnalyzerRenderer>
	 */
	protected $renderers = array();

	/**
	 * @var array
	 */
	protected $stats = array();
	
	/**
	 * @var BaseScanner
	 */
	protected $scanner = null;
	
	/**
	 * Runs the analyzer on the given $files.
	 * 
	 * @param array<AnalyzedFile> $files The files to process
	 */
	abstract function analyze( $files );
	
	/**
	 * Gets the metas generated by this analyzer.
	 * @return array<AnalyzerRenderer>
	 */
	function get_renderers() {
		return $this->renderers;
	}

	/**
	 * Gets the stats generated by this analyzer.
	 * @return array
	 */
	function get_stats() {
		return $this->stats;
	}
	
	/**
	 * Sets the BaseScanner that this analyzer is being run by.
	 * @param BaseScanner $scanner
	 */
	function set_scanner( $scanner ) {
		$this->scanner = $scanner;
	}
}