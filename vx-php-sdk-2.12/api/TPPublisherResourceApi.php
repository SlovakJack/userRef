<?php
/**
 * Copyright (c) 2014, Tinypass, Inc.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or
 * without modification, are permitted provided that the following
 * conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright
 * notice, this list of conditions and the following disclaimer.
 *
 * 2. Redistributions in binary form must reproduce the above copyright
 * notice, this list of conditions and the following disclaimer in the
 * documentation and/or other materials provided with the distribution.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS
 * OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY,
 * OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE
 * USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */
/**
 * The TPPublisherResourceApi class.
 */
class TPPublisherResourceApi  extends TPAPIBase {

    /**
     * @return attachResourceToFixedBundleRequestTPPublisherResourceApi
     */
    public function attachResourceToFixedBundleRequest(){

        return new attachResourceToFixedBundleRequestTPPublisherResourceApi($this->apiClient);
    }
    /**
     * @return countRequestTPPublisherResourceApi
     */
    public function countRequest(){

        return new countRequestTPPublisherResourceApi($this->apiClient);
    }
    /**
     * @return createResourceRequestTPPublisherResourceApi
     */
    public function createResourceRequest(){

        return new createResourceRequestTPPublisherResourceApi($this->apiClient);
    }
    /**
     * @return deleteResourceRequestTPPublisherResourceApi
     */
    public function deleteResourceRequest(){

        return new deleteResourceRequestTPPublisherResourceApi($this->apiClient);
    }
    /**
     * @return detachResourceFromFixedBundleRequestTPPublisherResourceApi
     */
    public function detachResourceFromFixedBundleRequest(){

        return new detachResourceFromFixedBundleRequestTPPublisherResourceApi($this->apiClient);
    }
    /**
     * @return disableResourceRequestTPPublisherResourceApi
     */
    public function disableResourceRequest(){

        return new disableResourceRequestTPPublisherResourceApi($this->apiClient);
    }
    /**
     * @return enableResourceRequestTPPublisherResourceApi
     */
    public function enableResourceRequest(){

        return new enableResourceRequestTPPublisherResourceApi($this->apiClient);
    }
    /**
     * @return getResourceRequestTPPublisherResourceApi
     */
    public function getResourceRequest(){

        return new getResourceRequestTPPublisherResourceApi($this->apiClient);
    }
    /**
     * @return listBundlesRequestTPPublisherResourceApi
     */
    public function listBundlesRequest(){

        return new listBundlesRequestTPPublisherResourceApi($this->apiClient);
    }
    /**
     * @return listResourcesRequestTPPublisherResourceApi
     */
    public function listResourcesRequest(){

        return new listResourcesRequestTPPublisherResourceApi($this->apiClient);
    }
    /**
     * @return updateResourceRequestTPPublisherResourceApi
     */
    public function updateResourceRequest(){

        return new updateResourceRequestTPPublisherResourceApi($this->apiClient);
    }

}

/**
 * Attach resource(s) to a fixed bundle
 */
class attachResourceToFixedBundleRequestTPPublisherResourceApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return attachResourceToFixedBundleRequestTPPublisherResourceApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Included RIDs
     * @param string[] $includedRid
     * @return attachResourceToFixedBundleRequestTPPublisherResourceApi
     */
    public function includedRid($includedRid){
        $this->request['includedRid'] = $includedRid;
        return $this;
    }
    
    /**
     * Unique id for resource bundle
     * @param string $bundleRid
     * @return attachResourceToFixedBundleRequestTPPublisherResourceApi
     */
    public function bundleRid($bundleRid){
        $this->request['bundleRid'] = $bundleRid;
        return $this;
    }
    
    /**
     * Execute request

     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['includedRid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'includedRid' ) ] = $this->apiClient->toQueryValue($this->request['includedRid']);
        }
        
        if (isset($this->request['bundleRid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'bundleRid' ) ] = $this->apiClient->toQueryValue($this->request['bundleRid']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/resource/attach', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
    }
}
/**
 * Lists total number of resources
 */
class countRequestTPPublisherResourceApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return countRequestTPPublisherResourceApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Execute request
     * @return int
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/resource/count', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'int');
        
    }
}
/**
 * Creates a resource
 */
class createResourceRequestTPPublisherResourceApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return createResourceRequestTPPublisherResourceApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * The name
     * @param string $name
     * @return createResourceRequestTPPublisherResourceApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    
    /**
     * Unique id for resource
     * @param string $rid
     * @return createResourceRequestTPPublisherResourceApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    
    /**
     * Resource description
     * @param string $description
     * @return createResourceRequestTPPublisherResourceApi
     */
    public function description($description){
        $this->request['description'] = $description;
        return $this;
    }
    
    /**
     * Type of resource
     * @param string $type
     * @return createResourceRequestTPPublisherResourceApi
     */
    public function type($type){
        $this->request['type'] = $type;
        return $this;
    }
    
    /**
     * Resource image URL
     * @param string $imageUrl
     * @return createResourceRequestTPPublisherResourceApi
     */
    public function imageUrl($imageUrl){
        $this->request['imageUrl'] = $imageUrl;
        return $this;
    }
    
    /**
     * Type of resource bundle
     * @param string $bundleType
     * @return createResourceRequestTPPublisherResourceApi
     */
    public function bundleType($bundleType){
        $this->request['bundleType'] = $bundleType;
        return $this;
    }
    
    /**
     * Id for resource tag
     * @param string[] $resourceTagId
     * @return createResourceRequestTPPublisherResourceApi
     */
    public function resourceTagId($resourceTagId){
        $this->request['resourceTagId'] = $resourceTagId;
        return $this;
    }
    
    /**
     * The publish date
     * @param string $publishDate
     * @return createResourceRequestTPPublisherResourceApi
     */
    public function publishDate($publishDate){
        $this->request['publishDate'] = $publishDate;
        return $this;
    }
    
    /**
     * Resource URL
     * @param string $resourceUrl
     * @return createResourceRequestTPPublisherResourceApi
     */
    public function resourceUrl($resourceUrl){
        $this->request['resourceUrl'] = $resourceUrl;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherResource
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['name'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->apiClient->toQueryValue($this->request['name']);
        }
        
        if (isset($this->request['rid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->apiClient->toQueryValue($this->request['rid']);
        }
        
        if (isset($this->request['description'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'description' ) ] = $this->apiClient->toQueryValue($this->request['description']);
        }
        
        if (isset($this->request['type'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'type' ) ] = $this->apiClient->toQueryValue($this->request['type']);
        }
        
        if (isset($this->request['imageUrl'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'imageUrl' ) ] = $this->apiClient->toQueryValue($this->request['imageUrl']);
        }
        
        if (isset($this->request['bundleType'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'bundleType' ) ] = $this->apiClient->toQueryValue($this->request['bundleType']);
        }
        
        if (isset($this->request['resourceTagId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'resourceTagId' ) ] = $this->apiClient->toQueryValue($this->request['resourceTagId']);
        }
        
        if (isset($this->request['publishDate'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'publishDate' ) ] = $this->apiClient->toQueryValue($this->request['publishDate']);
        }
        
        if (isset($this->request['resourceUrl'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'resourceUrl' ) ] = $this->apiClient->toQueryValue($this->request['resourceUrl']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/resource/create', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherResource');
        
    }
}
/**
 * Delete a resource
 */
class deleteResourceRequestTPPublisherResourceApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return deleteResourceRequestTPPublisherResourceApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Unique id for resource
     * @param string $rid
     * @return deleteResourceRequestTPPublisherResourceApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    
    /**
     * Execute request

     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['rid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->apiClient->toQueryValue($this->request['rid']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/resource/delete', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
    }
}
/**
 * Detach a resource from a fixed bundle
 */
class detachResourceFromFixedBundleRequestTPPublisherResourceApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return detachResourceFromFixedBundleRequestTPPublisherResourceApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Unique id for resource
     * @param string $rid
     * @return detachResourceFromFixedBundleRequestTPPublisherResourceApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    
    /**
     * Unique id for resource bundle
     * @param string $bundleRid
     * @return detachResourceFromFixedBundleRequestTPPublisherResourceApi
     */
    public function bundleRid($bundleRid){
        $this->request['bundleRid'] = $bundleRid;
        return $this;
    }
    
    /**
     * Execute request

     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['rid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->apiClient->toQueryValue($this->request['rid']);
        }
        
        if (isset($this->request['bundleRid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'bundleRid' ) ] = $this->apiClient->toQueryValue($this->request['bundleRid']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/resource/detach', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
    }
}
/**
 * Disable one or more resources
 */
class disableResourceRequestTPPublisherResourceApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return disableResourceRequestTPPublisherResourceApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Included RIDs
     * @param string[] $includedRid
     * @return disableResourceRequestTPPublisherResourceApi
     */
    public function includedRid($includedRid){
        $this->request['includedRid'] = $includedRid;
        return $this;
    }
    
    /**
     * Execute request

     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['includedRid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'includedRid' ) ] = $this->apiClient->toQueryValue($this->request['includedRid']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/resource/disable', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
    }
}
/**
 * Enable one or more resources
 */
class enableResourceRequestTPPublisherResourceApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return enableResourceRequestTPPublisherResourceApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Included RIDs
     * @param string[] $includedRid
     * @return enableResourceRequestTPPublisherResourceApi
     */
    public function includedRid($includedRid){
        $this->request['includedRid'] = $includedRid;
        return $this;
    }
    
    /**
     * Execute request

     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['includedRid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'includedRid' ) ] = $this->apiClient->toQueryValue($this->request['includedRid']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/resource/enable', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
    }
}
/**
 * Get a resource
 */
class getResourceRequestTPPublisherResourceApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return getResourceRequestTPPublisherResourceApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Unique id for resource
     * @param string $rid
     * @return getResourceRequestTPPublisherResourceApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherResource
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['rid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->apiClient->toQueryValue($this->request['rid']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/resource/get', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherResource');
        
    }
}
/**
 * Lists bundles that a resource belongs to
 */
class listBundlesRequestTPPublisherResourceApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return listBundlesRequestTPPublisherResourceApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Unique id for resource
     * @param string $rid
     * @return listBundlesRequestTPPublisherResourceApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return listBundlesRequestTPPublisherResourceApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return listBundlesRequestTPPublisherResourceApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    
    /**
     * Field to order by
     * @param string $orderBy
     * @return listBundlesRequestTPPublisherResourceApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    
    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return listBundlesRequestTPPublisherResourceApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    
    /**
     * Resource type
     * @param string $type
     * @return listBundlesRequestTPPublisherResourceApi
     */
    public function type($type){
        $this->request['type'] = $type;
        return $this;
    }
    
    /**
     * Search value
     * @param string $q
     * @return listBundlesRequestTPPublisherResourceApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    
    /**
     * Disabled flag
     * @param bool $disabled
     * @return listBundlesRequestTPPublisherResourceApi
     */
    public function disabled($disabled){
        $this->request['disabled'] = $disabled;
        return $this;
    }
    
    /**
     * Bundle type
     * @param int $bundleType
     * @return listBundlesRequestTPPublisherResourceApi
     */
    public function bundleType($bundleType){
        $this->request['bundleType'] = $bundleType;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherResource[]
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['rid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->apiClient->toQueryValue($this->request['rid']);
        }
        
        if (isset($this->request['offset'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'offset' ) ] = $this->apiClient->toQueryValue($this->request['offset']);
        }
        
        if (isset($this->request['limit'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'limit' ) ] = $this->apiClient->toQueryValue($this->request['limit']);
        }
        
        if (isset($this->request['orderBy'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'orderBy' ) ] = $this->apiClient->toQueryValue($this->request['orderBy']);
        }
        
        if (isset($this->request['orderDirection'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'orderDirection' ) ] = $this->apiClient->toQueryValue($this->request['orderDirection']);
        }
        
        if (isset($this->request['type'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'type' ) ] = $this->apiClient->toQueryValue($this->request['type']);
        }
        
        if (isset($this->request['q'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'q' ) ] = $this->apiClient->toQueryValue($this->request['q']);
        }
        
        if (isset($this->request['disabled'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'disabled' ) ] = $this->apiClient->toQueryValue($this->request['disabled']);
        }
        
        if (isset($this->request['bundleType'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'bundleType' ) ] = $this->apiClient->toQueryValue($this->request['bundleType']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/resource/bundles', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherResource', 'array');
        
    }
}
/**
 * Lists resources
 */
class listResourcesRequestTPPublisherResourceApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return listResourcesRequestTPPublisherResourceApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return listResourcesRequestTPPublisherResourceApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return listResourcesRequestTPPublisherResourceApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    
    /**
     * Field to order by
     * @param string $orderBy
     * @return listResourcesRequestTPPublisherResourceApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    
    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return listResourcesRequestTPPublisherResourceApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    
    /**
     * Resource type
     * @param string $type
     * @return listResourcesRequestTPPublisherResourceApi
     */
    public function type($type){
        $this->request['type'] = $type;
        return $this;
    }
    
    /**
     * Included tag IDs
     * @param string[] $includedTagId
     * @return listResourcesRequestTPPublisherResourceApi
     */
    public function includedTagId($includedTagId){
        $this->request['includedTagId'] = $includedTagId;
        return $this;
    }
    
    /**
     * Excluded RIDs
     * @param string[] $excludedRid
     * @return listResourcesRequestTPPublisherResourceApi
     */
    public function excludedRid($excludedRid){
        $this->request['excludedRid'] = $excludedRid;
        return $this;
    }
    
    /**
     * Included RIDs
     * @param string[] $includedRid
     * @return listResourcesRequestTPPublisherResourceApi
     */
    public function includedRid($includedRid){
        $this->request['includedRid'] = $includedRid;
        return $this;
    }
    
    /**
     * Search value
     * @param string $q
     * @return listResourcesRequestTPPublisherResourceApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    
    /**
     * Disabled flag
     * @param bool $disabled
     * @return listResourcesRequestTPPublisherResourceApi
     */
    public function disabled($disabled){
        $this->request['disabled'] = $disabled;
        return $this;
    }
    
    /**
     * Bundle type
     * @param int $bundleType
     * @return listResourcesRequestTPPublisherResourceApi
     */
    public function bundleType($bundleType){
        $this->request['bundleType'] = $bundleType;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherResource[]
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['offset'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'offset' ) ] = $this->apiClient->toQueryValue($this->request['offset']);
        }
        
        if (isset($this->request['limit'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'limit' ) ] = $this->apiClient->toQueryValue($this->request['limit']);
        }
        
        if (isset($this->request['orderBy'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'orderBy' ) ] = $this->apiClient->toQueryValue($this->request['orderBy']);
        }
        
        if (isset($this->request['orderDirection'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'orderDirection' ) ] = $this->apiClient->toQueryValue($this->request['orderDirection']);
        }
        
        if (isset($this->request['type'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'type' ) ] = $this->apiClient->toQueryValue($this->request['type']);
        }
        
        if (isset($this->request['includedTagId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'includedTagId' ) ] = $this->apiClient->toQueryValue($this->request['includedTagId']);
        }
        
        if (isset($this->request['excludedRid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'excludedRid' ) ] = $this->apiClient->toQueryValue($this->request['excludedRid']);
        }
        
        if (isset($this->request['includedRid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'includedRid' ) ] = $this->apiClient->toQueryValue($this->request['includedRid']);
        }
        
        if (isset($this->request['q'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'q' ) ] = $this->apiClient->toQueryValue($this->request['q']);
        }
        
        if (isset($this->request['disabled'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'disabled' ) ] = $this->apiClient->toQueryValue($this->request['disabled']);
        }
        
        if (isset($this->request['bundleType'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'bundleType' ) ] = $this->apiClient->toQueryValue($this->request['bundleType']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/resource/list', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherResource', 'array');
        
    }
}
/**
 * Update a resource
 */
class updateResourceRequestTPPublisherResourceApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return updateResourceRequestTPPublisherResourceApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Unique id for resource
     * @param string $rid
     * @return updateResourceRequestTPPublisherResourceApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    
    /**
     * The name
     * @param string $name
     * @return updateResourceRequestTPPublisherResourceApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    
    /**
     * New rid
     * @param string $newRid
     * @return updateResourceRequestTPPublisherResourceApi
     */
    public function newRid($newRid){
        $this->request['newRid'] = $newRid;
        return $this;
    }
    
    /**
     * Resource image URL
     * @param string $imageUrl
     * @return updateResourceRequestTPPublisherResourceApi
     */
    public function imageUrl($imageUrl){
        $this->request['imageUrl'] = $imageUrl;
        return $this;
    }
    
    /**
     * Resource description
     * @param string $description
     * @return updateResourceRequestTPPublisherResourceApi
     */
    public function description($description){
        $this->request['description'] = $description;
        return $this;
    }
    
    /**
     * If the object is disabled
     * @param bool $disabled
     * @return updateResourceRequestTPPublisherResourceApi
     */
    public function disabled($disabled){
        $this->request['disabled'] = $disabled;
        return $this;
    }
    
    /**
     * The publish date
     * @param string $publishDate
     * @return updateResourceRequestTPPublisherResourceApi
     */
    public function publishDate($publishDate){
        $this->request['publishDate'] = $publishDate;
        return $this;
    }
    
    /**
     * Included RIDs
     * @param string[] $includedRid
     * @return updateResourceRequestTPPublisherResourceApi
     */
    public function includedRid($includedRid){
        $this->request['includedRid'] = $includedRid;
        return $this;
    }
    
    /**
     * Fixed bundle RIDs
     * @param string[] $fixedBundleRid
     * @return updateResourceRequestTPPublisherResourceApi
     */
    public function fixedBundleRid($fixedBundleRid){
        $this->request['fixedBundleRid'] = $fixedBundleRid;
        return $this;
    }
    
    /**
     * Term IDs to add
     * @param string[] $addTermId
     * @return updateResourceRequestTPPublisherResourceApi
     */
    public function addTermId($addTermId){
        $this->request['addTermId'] = $addTermId;
        return $this;
    }
    
    /**
     * Term IDs to delete
     * @param string[] $delTermId
     * @return updateResourceRequestTPPublisherResourceApi
     */
    public function delTermId($delTermId){
        $this->request['delTermId'] = $delTermId;
        return $this;
    }
    
    /**
     * Included tag IDs
     * @param string[] $includedTagId
     * @return updateResourceRequestTPPublisherResourceApi
     */
    public function includedTagId($includedTagId){
        $this->request['includedTagId'] = $includedTagId;
        return $this;
    }
    
    /**
     * Included tag names
     * @param string[] $includedTagName
     * @return updateResourceRequestTPPublisherResourceApi
     */
    public function includedTagName($includedTagName){
        $this->request['includedTagName'] = $includedTagName;
        return $this;
    }
    
    /**
     * Resource URL
     * @param string $resourceUrl
     * @return updateResourceRequestTPPublisherResourceApi
     */
    public function resourceUrl($resourceUrl){
        $this->request['resourceUrl'] = $resourceUrl;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherResource
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['rid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->apiClient->toQueryValue($this->request['rid']);
        }
        
        if (isset($this->request['name'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->apiClient->toQueryValue($this->request['name']);
        }
        
        if (isset($this->request['newRid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'newRid' ) ] = $this->apiClient->toQueryValue($this->request['newRid']);
        }
        
        if (isset($this->request['imageUrl'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'imageUrl' ) ] = $this->apiClient->toQueryValue($this->request['imageUrl']);
        }
        
        if (isset($this->request['description'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'description' ) ] = $this->apiClient->toQueryValue($this->request['description']);
        }
        
        if (isset($this->request['disabled'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'disabled' ) ] = $this->apiClient->toQueryValue($this->request['disabled']);
        }
        
        if (isset($this->request['publishDate'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'publishDate' ) ] = $this->apiClient->toQueryValue($this->request['publishDate']);
        }
        
        if (isset($this->request['includedRid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'includedRid' ) ] = $this->apiClient->toQueryValue($this->request['includedRid']);
        }
        
        if (isset($this->request['fixedBundleRid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'fixedBundleRid' ) ] = $this->apiClient->toQueryValue($this->request['fixedBundleRid']);
        }
        
        if (isset($this->request['addTermId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'addTermId' ) ] = $this->apiClient->toQueryValue($this->request['addTermId']);
        }
        
        if (isset($this->request['delTermId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'delTermId' ) ] = $this->apiClient->toQueryValue($this->request['delTermId']);
        }
        
        if (isset($this->request['includedTagId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'includedTagId' ) ] = $this->apiClient->toQueryValue($this->request['includedTagId']);
        }
        
        if (isset($this->request['includedTagName'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'includedTagName' ) ] = $this->apiClient->toQueryValue($this->request['includedTagName']);
        }
        
        if (isset($this->request['resourceUrl'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'resourceUrl' ) ] = $this->apiClient->toQueryValue($this->request['resourceUrl']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/resource/update', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherResource');
        
    }
}
