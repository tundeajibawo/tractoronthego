'use strict';

if (typeof Object.assign != 'function') {
    Object.assign = function (target, varArgs) { // .length of function is 2
        'use strict';
        if (target == null) { // TypeError if undefined or null
            throw new TypeError('Cannot convert undefined or null to object');
        }

        var to = Object(target);

        for (var index = 1; index < arguments.length; index++) {
            var nextSource = arguments[index];

            if (nextSource != null) { // Skip over if undefined or null
                for (var nextKey in nextSource) {
                    // Avoid bugs when hasOwnProperty is shadowed
                    if (Object.prototype.hasOwnProperty.call(nextSource, nextKey)) {
                        to[nextKey] = nextSource[nextKey];
                    }
                }
            }
        }
        return to;
    };
}

let plans = {
    'title': 'availablePlans',
    'description': 'This is a list of available plans on Home Manager',
    "list": [
        {
            "name": "Harrowing",
            "description": "Harrow the land",
            "type": "service",
            "plans": [
                {
                    "plan_name": "Often Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land was tractorized at most 2 months ago",
                            "unit_price": "15000"
                        }
                    ],
                    "total_price": "15000",
                    "cycle": "per project"
                },
                {
                    "plan_name": "Never Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land has never undergone a tractor operation",
                            "unit_price": "25000"
                        }
                    ],
                    "total_price": "25000",
                    "cycle": "per project"
                },
            ]
        },
        {
            "name": "Ploughing",
            "description": "Plough the land...",
            "type": "service",
            "plans": [
                {
                    "plan_name": "Often Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land was tractorized at most 2 months ago",
                            "unit_price": "15000"
                        }
                    ],
                    "total_price": "15000",
                    "cycle": "per project"
                },
                {
                    "plan_name": "Never Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land has never undergone a tractor operation",
                            "unit_price": "25000"
                        }
                    ],
                    "total_price": "25000",
                    "cycle": "per project"
                },
            ]
        },

        {
            "name": "Ridging",
            "description": "Ridge the land...",
            "type": "service",
            "plans": [
                {
                    "plan_name": "Often Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land was tractorized at most 2 months ago",
                            "unit_price": "25000"
                        }
                    ],
                    "total_price": "25000",
                    "cycle": "per project"
                },
                {
                    "plan_name": "Never Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land has never undergone a tractor operation",
                            "unit_price": "20000"
                        }
                    ],
                    "total_price": "20000",
                    "cycle": "per project"
                },
            ]
        },
        {
            "name": "De-Stumping",
            "description": "De-stump the land...",
            "type": "service",
            "plans": [
                {
                    "plan_name": "Often Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land was tractorized at most 2 months ago",
                            "unit_price": "150000"
                        }
                    ],
                    "total_price": "150000",
                    "cycle": "per project"
                },
                {
                    "plan_name": "Never Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land has never undergone a tractor operation",
                            "unit_price": "150000"
                        }
                    ],
                    "total_price": "150000",
                    "cycle": "per project"
                },
            ]
        },
        {
            "name": "Planting",
            "description": "Plant on the land...",
            "type": "service",
            "plans": [
                {
                    "plan_name": "Often Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land was tractorized at most 2 months ago",
                            "unit_price": "20000"
                        }
                    ],
                    "total_price": "20000",
                    "cycle": "per project"
                },
                {
                    "plan_name": "Never Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land has never undergone a tractor operation",
                            "unit_price": "28000"
                        }
                    ],
                    "total_price": "28000",
                    "cycle": "per project"
                },

            ]
        },
        {
            "name": "Harvesting",
            "description": "Land will undergo harvesting...",
            "type": "service",
            "plans": [
                {
                    "plan_name": "Often Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land was tractorized at most 2 months ago",
                            "unit_price": "50000"
                        }
                    ],
                    "total_price": "50000",
                    "cycle": "per project"
                },

                {
                    "plan_name": "Never Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land has never undergone a tractor operation",
                            "unit_price": "50000"
                        }
                    ],
                    "total_price": "50000",
                    "cycle": "per project"
                },

            ]
        },
        {
            "name": "Threshing",
            "description": "Thresh the land...",
            "type": "service",
            "plans": [
                {
                    "plan_name": "Often Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land was tractorized at most 2 months ago",
                            "unit_price": "50000"
                        }
                    ],
                    "total_price": "50000",
                    "cycle": "per project"
                },

                {
                    "plan_name": "Never Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land has never undergone a tractor operation",
                            "unit_price": "50000"
                        }
                    ],
                    "total_price": "50000",
                    "cycle": "per project"
                },

            ]
        },

        {
            "name": "Spraying",
            "description": "Spraying the land...",
            "type": "service",
            "plans": [
                {
                    "plan_name": "Often Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land was tractorized at most 2 months ago",
                            "unit_price": "8000"
                        }
                    ],
                    "total_price": "8000",
                    "cycle": "per project"
                },
                {
                    "plan_name": "Never Tractorized",
                    "plan_breakdown": [
                        {
                            "activity": "Land has never undergone a tractor operation",
                            "unit_price": "10000"
                        }
                    ],
                    "total_price": "10000",
                    "cycle": "per project"
                },

            ]
        },


    ]
};

angular.module('homeApp', ['ngAnimate'])
    .controller('homeCtrl', ['$scope', '$http', '$q', function ($scope, $http, $q) {
        $scope.formParams = {};
        $scope.stage = "";
        $scope.formValidation = false;
        $scope.toggleJSONView = false;
        $scope.toggleFormErrorsView = false;

        $scope.data = {
            propertyType: '',
            serviceType: 'tractorization',
            commercialType: null,
            numberOfRooms: 3,
            propertyFeatures: [],
            services: [],
            notes: "",
            typeOfOperation:null,
            typeOfLand:null,
        };
        //$scope.count='hello';
        

        $scope.type = 'Farmer';
        $scope.objectType = 'Farm';

        $scope.availablePropertyFeatures = ['Trees', 'Lakes', 'Caves', 'Streams', 'Barns',
            'Silos', 'Storage Facility', 'Farm House', 'Broiling Houses'];

        $scope.addNewFeature = function () {
            var availableFeatures = getAvailableFeatures();
            if (!availableFeatures.length) {
                $("#property-features-error").fadeIn(1000);
                return;
            }
            $scope.data.propertyFeatures.unshift({
                name: availableFeatures[0],
                quantity: '1',
                availableFeatures: availableFeatures
            });
            setAvailablePropertyFeatures();
        };


        $scope.removeFeature = function () {
            if ($scope.data.propertyFeatures.length > 1) {
                $scope.data.propertyFeatures.shift();
                setAvailablePropertyFeatures();
            }
        };

        $scope.resetFeatures = function () {
            $scope.data.propertyFeatures = [];
            $scope.addNewFeature();
        };

        $scope.addNewFeature();


        $scope.onPropertyFeatureChange = function (feature, oldFeatureName) {
            if (feature.name !== oldFeatureName) {
                setAvailablePropertyFeatures();
            }
        };

        function setAvailablePropertyFeatures() {
            $scope.data.propertyFeatures.forEach(function (feature) {
                feature.availableFeatures = [feature.name].concat(getAvailableFeatures());
            });
        }

        function getAvailableFeatures() {
            var currentFeatures = $scope.data.propertyFeatures.reduce(function (features, feature) {
                return features.concat(feature.name);
            }, []);
            return $scope.availablePropertyFeatures.filter(function (feature) {
                return $.inArray(feature, currentFeatures) === -1;
            });
        }


        $scope.availableServices = plans.list.filter(function (item) {
            return item.type === 'service';
        });
        //display first service by default
        $scope.typeOfOperation = $scope.availableServices[0].name;
        $scope.addNewService = function () {
            var availableServices = $scope.availableServices;//getAvailableServices('services');
            var length = $scope.data.services.length;

            if (!availableServices.length) {
                $("#service_error").fadeIn(1000);
                return;
            }
            if ($scope.data.services.length === 10) {
                $("#service_error").fadeIn(1000);
                return;
            }
            var newService = Object.assign({}, availableServices[0], {
                quantity: '1',
                plan: availableServices[0].plans[0],
                insurance: true,
                len: length + 1
            });
            $scope.data.services.unshift({
                data: newService,
                availableServices: availableServices
            });
            //setAvailableServices('services');
        };
        $scope.removeService = function () {
            if ($scope.data.services.length > 1) {
                $scope.data.services.shift();
                //setAvailableServices('services');
            }
        };
        $scope.resetServices = function () {
            $scope.data.services = [];
            $scope.addNewService();
        };

        $scope.addNewService();
        $scope.onChangeTypeOfLand = function(service,plan_name){
            var selected_plan = service.data.plan.plan_name;
            var service_plans = service.data.plans;
            service_plans.map(function(e){
                if(e.plan_name===selected_plan){
                    service.data.plan = e;
                }
            });
        };
        $scope.onServiceChange = function (service, oldServiceName, serviceType) {
            service.data.quantity = '1';
            service.data.insurance = true;
            if (serviceType === 'tractorization') {
                service.data.plan = service.data.plans[0];
                service.data.len = $scope.data.services.length;
            }
            if(serviceType==='services'){
                service.data.plan = service.data.plans[0];
            }

        };

        function setAvailableServices(serviceType) {
            var currentServices = $scope.data.services;
            var availableIndex = 'availableServices';
            currentServices.forEach(function (service) {
                service[availableIndex] = [service.data].concat(getAvailableServices());
            });
        }

        function getAvailableServices() {
            var serviceArray = $scope.availableServices;
            var currentServices = $scope.data.services;
            var currentServicesByName = currentServices.reduce(function (services, service) {
                return services.concat(service.data.name);
            }, []);
            return serviceArray.filter(function (service) {
                return $.inArray(service.name, currentServicesByName) === -1;
            });
        }

        

        $scope.orderSummary = {};
        $scope.deslocations = {};
       
        $scope.calculateOrderSummary = function () {
            $scope.orderSummary = {
                serviceType: $scope.data.serviceType === 'Services',
                itemsForService: getItemsForService(),
                propertyType: $scope.data.propertyType === 'commercial' ? '(Commercial) ' + $scope.data.commercialType : '(Family Owned)',
                propertyFeatures: getPropertyFeatures(),
                totalAmountNoVat: getTotalAmount(),
                //totalAmount: vat(getTotalAmount()),
                totalAmount: getTotalAmount(),
                location: $scope.userSelectedLga +" , "+ $scope.locationState,
                userlga: $scope.userSelectedLga,
                userstate:$scope.locationState,
               // kilodiff:$scope.calculateCost(),
               // totalAmount: formatCurrency(vat(getTotalAmount())),
            };
            if ($scope.data.notes) {
                $scope.orderSummary.notes = $scope.data.notes;
            }
            
           $scope.reverseGeocode();
            

        };

        function getItemsForService() {
            var items = [].concat($scope.data.services);
            var insurance = 0; // default price point for insurance policy
            if ($scope.data.serviceType === 'tractorization') {
                return items.reduce(function (items, item) {
                    var name = item.data.name;
                    var amount = item.data.plan.total_price;
                    var description = '';
                    if (item.data.insurance)
                        description = item.data.quantity + ' "' + item.data.name + '" service(s) for "' + item.data.plan.plan_name + '" land at ' + formatCurrency(Number(item.data.plan.total_price)) + ' ' + item.data.plan.cycle + ' - with insurance at ' + formatCurrency(Number(insurance)) + ' per hectare';
                    else
                        description = item.data.quantity + ' "' + item.data.name + '" service(s) for "' + item.data.plan.plan_name + '" land at ' + formatCurrency(Number(item.data.plan.total_price)) + ' ' + item.data.plan.cycle + ' - without insurance at '  + formatCurrency(Number(insurance)) + ' per hectare';

                    return items.concat([{amount: amount, name: name, description: description}]);
                }, []);
            }
        }

        function formatCurrency(num) {
            var p = num.toFixed(2).split(".");
            return "N" + p[0].split("").reverse().reduce(function(acc, num, i, orig) {
                return  num=="-" ? acc : num + (i && !(i % 3) ? "," : "") + acc;
            }, "") + "." + p[1];
        }

        function getPropertyFeatures() {
            return $scope.data.propertyFeatures.map(function (item) {
                return item.quantity + ' ' + item.name + '(s)';
            }).join(', ');
        }

        function vat(totalAmount) {
            return Math.round(totalAmount + (totalAmount * 5 / 100));
        }

        function getTotalAmount() {
            var items = $scope.data.services;
            var roomz = $scope.data.numberOfRooms;
            if ($scope.data.serviceType === 'tractorization') {
                return items.reduce(function (sum, item) {
                    if (item.data.insurance)
                        return sum + parseFloat(item.data.plan.total_price * item.data.quantity * roomz);
                    else return sum + parseFloat(item.data.plan.total_price * item.data.quantity * roomz);
                }, 0);
            }
        }

        $scope.checkout = function () {
            $scope.calculateOrderSummary();
            var orderSummary = $scope.orderSummary;
            var orderForm = $('<form>', {
                action: '/home/farmer_transactions',
                target: '_top',
                method: 'GET'
            });
            orderForm.append(getJqueryInput('amount', orderSummary.totalAmount));
            orderForm.append(getJqueryInput('lga', orderSummary.userlga));
            orderForm.append(getJqueryInput('state', orderSummary.userstate));
            orderForm.append(getJqueryInput('service_type', 'tractorization'));

            var servicesTitle = orderSummary.itemsForService.map(function (item) {
                return item.name;
            }).join(', ');
            orderForm.append(getJqueryInput('subscription_title', servicesTitle));
            orderForm.append(getJqueryInput('subscription_type', orderSummary.serviceType));

            var buildingSpecification = orderSummary.propertyType + ' with ' + orderSummary.propertyFeatures;
            orderForm.append(getJqueryInput('building_specification', buildingSpecification));

            if (orderSummary.notes) {
                orderForm.append(getJqueryInput('notes', orderSummary.notes));
            }

            orderSummary.itemsForService.forEach(function (item, index) {
                orderForm.append(getJqueryInput("items[" + index + "][description]", item.description));
                orderForm.append(getJqueryInput("items[" + index + "][amount]", item.amount));
                orderForm.append(getJqueryInput('items_description', item.description));
            });
            orderForm.hide().appendTo("body").submit();
        };


        $scope.getLga = function(stateId){
          var lgaUrl = "/home/getLga/" + stateId.id ;
          $scope.locationState = stateId.name;
          $http({
                method: 'GET',
                url: lgaUrl
            }).then(function successCallback(response) {
                $scope.lgas = response.data;
            }, function errorCallback(error) {
                console.log(error);
            });
        }

        $scope.getStates = function(){
            var stateUrl = "/home/getstate/";
            $http({
                method: 'GET',
                url: stateUrl
            }).then(function successCallback(response) {
                $scope.states = response.data;
             }, function errorCallback(error) {
                console.log(error);
            });
        }
       


        
        function http_get(url, selectedAddressLat, selectedAddressLng)
        {
           var deferred = $q.defer();
           $http({ method: "GET", url: url})
            .then(function (response) {
                
                 var source1 = new google.maps.LatLng(
                        response.data[0].lat,
                        response.data[0].lng
                    );
                var destination1 = new google.maps.LatLng(
                        selectedAddressLat,
                        selectedAddressLng
                    );
                 $scope.lat = response.data[0].lat;
                 var service = new google.maps.DistanceMatrixService();
                 service.getDistanceMatrix
                 (
                        {
                            origins: [source1],
                            destinations: [destination1],
                            travelMode: "DRIVING"

                        },function(response,status){
                            console.log(status);
                            if(status == 'OK'){
                                deferred.resolve(response);
                            }
                            else{
                                deferred.reject(status);
                            }
                        }
                 ); 

                  
            })
            
            return deferred.promise;
        }    

         $scope.reverseGeocode = function() {
            var state = $scope.state != null ? $scope.state + " state" : "";
            var lga = $scope.lga != null ? $scope.lga : "";
            var street = $scope.street != null ? $scope.street: "";
            
            //console.log("address: " + street + ', ' + $scope.userSelectedLga + ', '+ $scope.locationState +' , Nigeria');
            var geocoder = new google.maps.Geocoder();
         
            geocoder.geocode( 
                { 
                    'address':  $scope.userSelectedLga + ', '+ $scope.locationState+' , Nigeria'
                     },
                        function(results, status) 
                        {
                            var selectedAddressLat = "";
                            var selectedAddressLng = "";
              
                            if (status == google.maps.GeocoderStatus.OK) 
                            {
                                // Call the lat/lng functions to return a computed value.
                                selectedAddressLat = results[0].geometry.location.lat();
                                selectedAddressLng = results[0].geometry.location.lng();
                                console.log('Lat :'+ selectedAddressLat);
                                console.log('Long :'+ selectedAddressLng);
                                //console.log('Long :'+ street);

                                var stateUrl = "/home/lat/" + $scope.locationState;
                                http_get(stateUrl,selectedAddressLat,selectedAddressLng)
                                .then(function(data)
                                {
                                    var deslocation;
                                    var additionalCost = calculateCost(data.rows[0].elements[0].distance.text);
                                    deslocation = {
                                        distance: data.rows[0].elements[0].distance.text,
                                        duration: data.rows[0].elements[0].duration.text,
                                        destinations: data.destinationAddresses,
                                        origin: data.originAddresses,
                                        additionalCost: additionalCost,
                                    };
                                    //deslocation = data;
                                    $scope.additionalCost = additionalCost;
                                    //$scope.deslocations.push(deslocation);
                                    $scope.deslocations = {
                                        distance: data.rows[0].elements[0].distance.text,
                                        duration: data.rows[0].elements[0].duration.text,
                                        destinations: data.destinationAddresses,
                                        additionalCost: additionalCost,
                                    }
                                    console.log(JSON.stringify(data));
                                });
                                
                            } 
                            else 
                            {
                                result = "Unable to find address: " + status;
                            }
                    }
                );
        };


        function calculateCost(distance) {
          console.log('Distance '+ distance);
          var constants = { first50: 80000, costPerKm: 1500 };
          var distanceInNumber = distance.replace(/[^\d\.]*/g, "");
          console.log("distance in number "+distanceInNumber);
          if (distanceInNumber <= 50) {
            // 80,000 + VAT ()
            return 80000;
          } else {
            var difference = (distanceInNumber - 50) * constants.costPerKm;
            return 80000 + difference;

          }
        }


        $scope.getSelectedLga = function(lgaSelect){
            $scope.userSelectedLga = lgaSelect;
        }
        /*$scope.getState = function(stateId){
            var stateUrl = "/home/getstate/" + stateId;
            $http({
                method: 'GET',
                url: stateUrl
            }).then(function successCallback(response) {
                $scope.locationState = response.data;
             }, function errorCallback(error) {
                console.log(error);
            });

        }*/

        $scope.getStates();


        function getJqueryInput(name, value) {
            return $('<input>', {
                name: name,
                value: value,
                type: 'hidden'
            });
        }

        $scope.formParams = {
            ccEmail: '',
            ccEmailList: []
        };

        $scope.errors = {};
        // Navigation functions
        $scope.next = function (section) {
            //$scope.direction = 1;
            //$scope.stage = stage;

            $scope.formValidation = true;

            if ($scope.homeAppForm.$valid) {
                $scope.direction = 1;
                $scope.section = section;
                $scope.formValidation = false;
                $scope.errors[section] = false;
            } else {
                $scope.errors[section] = true;
            }
        };

        $scope.back = function (section) {
            $scope.direction = 0;
            $scope.section = section;
        };

        // CC email list functions
        $scope.addCCEmail = function () {
            $scope.rowId++;

            var email = {
                email: $scope.formParams.ccEmail,
                row_id: $scope.rowId
            };

            $scope.formParams.ccEmailList.push(email);

            $scope.formParams.ccEmail = '';
        };

        $scope.removeCCEmail = function (row_id) {
            for (var i = 0; i < $scope.formParams.ccEmailList.length; i++) {
                if ($scope.formParams.ccEmailList[i].row_id === row_id) {
                    $scope.formParams.ccEmailList.splice(i, 1);
                    break;
                }
            }
        };


        // Post to desired exposed web service.
        $scope.submitForm = function () {
            var wsUrl = "/home/farmer_transactions";

            // Check form validity and submit data using $http
            if ($scope.homeAppForm.$valid) {
                $scope.formValidation = false;

                $http({
                    method: 'GET',
                    url: wsUrl,
                    data: JSON.stringify($scope.formParams)
                }).then(function successCallback(response) {
                    if (response
                        && response.data
                        && response.data.status
                        && response.data.status === 'success') {
                        $scope.stage = "success";
                    } else {
                        if (response
                            && response.data
                            && response.data.status
                            && response.data.status === 'error') {
                            $scope.stage = "error";
                        }
                    }
                }, function errorCallback(response) {
                    $scope.stage = "error";
                    console.log(response);
                });
            }
        };

        $scope.reset = function () {
            // Clean up scope before destroying
            $scope.formParams = {};
            $scope.stage = "";
        };
    }]).directive('rangeSlider', [function () {
    //directive to show validation errors
    return {
        scope: {
            numberOfRooms: '='
        },
        link: function (scope, element) {
            element.val(scope.numberOfRooms);
            element.rangeslider({
                polyfill: false,
                onSlide: function (position, value) {
                    scope.$apply(function () {
                        scope.numberOfRooms = value;
                    });
                }
            });
        }
    };
}]);
