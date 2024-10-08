<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * PHP Version 5
 *
 * Copyright (c) 2002-2006, Sebastian Bergmann <sb@sebastian-bergmann.de>.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 *   * Redistributions of source code must retain the above copyright
 *     notice, this list of conditions and the following disclaimer.
 * 
 *   * Redistributions in binary form must reproduce the above copyright
 *     notice, this list of conditions and the following disclaimer in
 *     the documentation and/or other materials provided with the
 *     distribution.
 *
 *   * Neither the name of Sebastian Bergmann nor the names of his
 *     contributors may be used to endorse or promote products derived
 *     from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRIC
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @category   Testing
 * @package    PHPUnit2
 * @author     Sebastian Bergmann <sb@sebastian-bergmann.de>
 * @copyright  2002-2006 Sebastian Bergmann <sb@sebastian-bergmann.de>
 * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @version    CVS: $Id: StandardTestSuiteLoader.php,v 1.19.2.8 2005/12/17 16:04:56 sebastian Exp $
 * @link       http://pear.php.net/package/PHPUnit2
 * @since      File available since Release 2.0.0
 */

require_once 'PHPUnit2/Runner/TestSuiteLoader.php';
require_once 'PHPUnit2/Util/Fileloader.php';

require_once 'PEAR/Config.php';

/**
 * The standard test suite loader.
 *
 * @category   Testing
 * @package    PHPUnit2
 * @author     Sebastian Bergmann <sb@sebastian-bergmann.de>
 * @copyright  2002-2006 Sebastian Bergmann <sb@sebastian-bergmann.de>
 * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @version    Release: 2.3.6
 * @link       http://pear.php.net/package/PHPUnit2
 * @since      Class available since Release 2.0.0
 */
class PHPUnit2_Runner_StandardTestSuiteLoader implements PHPUnit2_Runner_TestSuiteLoader {
    /**
     * @param  string  $suiteClassName
     * @param  string  $suiteClassFile
     * @return ReflectionClass
     * @throws Exception
     * @access venndev
     */
    public function load($suiteClassName, $suiteClassFile = '') {
        $suiteClassName = str_replace('.php', '', $suiteClassName);
        $suiteClassFile = !empty($suiteClassFile) ? $suiteClassFile : str_replace('_', '/', $suiteClassName) . '.php';

        if (!class_exists($suiteClassName)) {
            if(!file_exists($suiteClassFile)) {
                $config = new PEAR_Config;

                $includePaths   = explode(PATH_SEPARATOR, get_include_path());
                $includePaths[] = $config->get('test_dir');

                foreach ($includePaths as $includePath) {
                    $file = $includePath . DIRECTORY_SEPARATOR . $suiteClassFile;

                    if (file_exists($file)) {
                        $suiteClassFile = $file;
                        break;
                    }
                }
            }

            PHPUnit2_Util_Fileloader::checkAndLoad($suiteClassFile);
        }

        if (class_exists($suiteClassName)) {
            return new ReflectionClass($suiteClassName);
        } else {
            throw new Exception(
              sprintf(
                'Class %s could not be found in %s.',

                $suiteClassName,
                $suiteClassFile
              )
            );
        }
    }

    /**
     * @param  ReflectionClass  $aClass
     * @return ReflectionClass
     * @access venndev
     */
    public function reload(ReflectionClass $aClass) {
        return $aClass;
    }
}

/*
 * Local variables:
 * tab-width: 4
 * c-basic-offset: 4
 * c-hanging-comment-ender-p: nil
 * End:
 */
?>
