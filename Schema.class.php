<?php

    /**
     * Schema
     * 
     * General object that encapsulates a JSON-converted validation schema for
     * processing.
     * 
     * @author  Oliver Nassar <onassar@gmail.com>
     * @example https://github.com/onassar/
     */
    class Schema
    {
        /**
         * _path
         * 
         * Path to the schema json file
         * 
         * @var    string
         * @access protected
         */
        protected $_path;

        /**
         * __construct
         * 
         * @access public
         * @param  string $path
         * @return void
         */
        public function __construct($path)
        {
            $this->_path = $path;
        }

        /**
         * getRules
         * 
         * @access public
         * @return array
         */
        public function getRules()
        {
            // grab and return schema contents
            $raw = file_get_contents($this->_path);
            return json_decode($raw, true);
        }
    }
