<?php
/*
 * LearningStudio RESTful API Libraries 
 * These libraries make it easier to use the LearningStudio Course APIs.
 * Full Documentation is provided with the library. 
 * 
 * Need Help or Have Questions? 
 * Please use the PDN Developer Community at https://community.pdn.pearson.com
 *
 * @category   LearningStudio Course APIs
 * @author     Wes Williams <wes.williams@pearson.com>
 * @author     Pearson Developer Services Team <apisupport@pearson.com>
 * @copyright  2014 Pearson Education Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0  Apache 2.0
 * @version    1.0
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *     http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Core;
use Core as CoreLib;

/**
 * Core Service API
 * An implementation of CoreService for handling all requests and responses.
 * @author: Pradeep Patro <pradeep.patro@happiestminds.com>
 * @version: v1.0
 * @copyright: Pearson 2014
 * @package: Core
 * @since: 4th Jun 2014
 */
class BasicService extends CoreLib\AbstractService {
  /**
   * Constructor for CoreService
   * @access public
   * @param object $oauthServiceFactory
   * @return null
   */
  public function __construct($oauthServiceFactory) {
    parent::__construct($oauthServiceFactory);
  }

	/**
	 * Provides name of library for identification purposes
	 * 
	 * @return Unique identifier for library
	 */
	protected function getServiceIdentifier() {
		return "LS-Library-Core-PHP-V1";
	}

  /**
   * Performs HTTP operations using the selected authentication method
   * @access public 
   * @param string $method The HTTP Method to user
   * @param string $relativeUrl	The URL after .com (/me)
   * @param string|null $body	The body of the message
   * @param string|null $extraHeaders Extra headers to include in the request
   * @return Output in the preferred data format
   * @throws Exception if request leads to an error
   */
  public function doMethod ($method, $relativeUrl, $body = NULL, $extraHeaders = NULL) {
    return parent::_doMethod($method, $relativeUrl, $body, $extraHeaders);
  }
}
