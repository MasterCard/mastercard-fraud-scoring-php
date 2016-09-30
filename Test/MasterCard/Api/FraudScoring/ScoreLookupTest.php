<?php
/*
 * Copyright 2016 MasterCard International.
 *
 * Redistribution and use in source and binary forms, with or without modification, are 
 * permitted provided that the following conditions are met:
 *
 * Redistributions of source code must retain the above copyright notice, this list of 
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list of 
 * conditions and the following disclaimer in the documentation and/or other materials 
 * provided with the distribution.
 * Neither the name of the MasterCard International Incorporated nor the names of its 
 * contributors may be used to endorse or promote products derived from this software 
 * without specific prior written permission.
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES 
 * OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT 
 * SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, 
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
 * TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; 
 * OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER 
 * IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING 
 * IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF 
 * SUCH DAMAGE.
 *
 */

namespace MasterCard\Api\FraudScoring;

use MasterCard\Core\Model\RequestMap;
use MasterCard\Core\ApiConfig;
use MasterCard\Core\Security\OAuth\OAuthAuthentication;
use Test\BaseTest;



class ScoreLookupTest extends BaseTest {

    public static $responses = array();

    protected function setUp() {
        parent::setUp();
        //ApiConfig::setDebug(true);
        ApiConfig::setSandbox(true);
        BaseTest::resetAuthentication();
    }

    
    
    
                

        public function test_example_score()
        {
            

            

            $map = new RequestMap();
            $map->set ("ScoreLookupRequest.TransactionDetail.CustomerIdentifier", "1996");
            $map->set ("ScoreLookupRequest.TransactionDetail.MerchantIdentifier", "12345");
            $map->set ("ScoreLookupRequest.TransactionDetail.AccountNumber", "5555555555555555");
            $map->set ("ScoreLookupRequest.TransactionDetail.AccountPrefix", "555555");
            $map->set ("ScoreLookupRequest.TransactionDetail.AccountSuffix", "5555");
            $map->set ("ScoreLookupRequest.TransactionDetail.TransactionAmount", "12500");
            $map->set ("ScoreLookupRequest.TransactionDetail.TransactionDate", "1231");
            $map->set ("ScoreLookupRequest.TransactionDetail.TransactionTime", "035931");
            $map->set ("ScoreLookupRequest.TransactionDetail.BankNetReferenceNumber", "abc123hij");
            $map->set ("ScoreLookupRequest.TransactionDetail.Stan", "123456");
            
            
            $request = new ScoreLookup($map);
            $response = $request->update();

            $ignoreAssert = array();
            
            $this->customAssertEqual($ignoreAssert, $response, "ScoreLookup.CustomerIdentifier", "L5BsiPgaF-O3qA36znUATgQXwJB6MRoMSdhjd7wt50c97279");
            $this->customAssertEqual($ignoreAssert, $response, "ScoreLookup.TransactionDetail.CustomerIdentifier", "1996");
            $this->customAssertEqual($ignoreAssert, $response, "ScoreLookup.TransactionDetail.MerchantIdentifier", "12345");
            $this->customAssertEqual($ignoreAssert, $response, "ScoreLookup.TransactionDetail.AccountNumber", "5555555555555555");
            $this->customAssertEqual($ignoreAssert, $response, "ScoreLookup.TransactionDetail.AccountPrefix", "555555");
            $this->customAssertEqual($ignoreAssert, $response, "ScoreLookup.TransactionDetail.AccountSuffix", "5555");
            $this->customAssertEqual($ignoreAssert, $response, "ScoreLookup.TransactionDetail.TransactionAmount", "12500");
            $this->customAssertEqual($ignoreAssert, $response, "ScoreLookup.TransactionDetail.TransactionDate", "1231");
            $this->customAssertEqual($ignoreAssert, $response, "ScoreLookup.TransactionDetail.TransactionTime", "035931");
            $this->customAssertEqual($ignoreAssert, $response, "ScoreLookup.TransactionDetail.BankNetReferenceNumber", "abc123hij");
            $this->customAssertEqual($ignoreAssert, $response, "ScoreLookup.TransactionDetail.Stan", "123456");
            $this->customAssertEqual($ignoreAssert, $response, "ScoreLookup.ScoreResponse.MatchIndicator", "2");
            $this->customAssertEqual($ignoreAssert, $response, "ScoreLookup.ScoreResponse.FraudScore", "681");
            $this->customAssertEqual($ignoreAssert, $response, "ScoreLookup.ScoreResponse.ReasonCode", "A5");
            $this->customAssertEqual($ignoreAssert, $response, "ScoreLookup.ScoreResponse.RulesAdjustedScore", "701");
            $this->customAssertEqual($ignoreAssert, $response, "ScoreLookup.ScoreResponse.RulesAdjustedReasonCode", "19");
            $this->customAssertEqual($ignoreAssert, $response, "ScoreLookup.ScoreResponse.RulesAdjustedReasonCodeSecondary", "A9");
            

            self::putResponse("example_score", $response);
            
        }
        
    
    
    
    
    
    
}



