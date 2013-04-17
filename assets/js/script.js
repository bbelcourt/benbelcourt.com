/*******************************************
*	Author: Ben Belcourt
*	Last Modified: 4/17/2013
********************************************/

// Unique namespace to keep the global space clean
var BB = BB || {};

// Check that the document is loaded
B.on('readystatechange', document, function () {
	if (document.readyState === 'complete') {
		// Example of event delegation
		B.on('click', document.getElementById('content'), function (e) {
			if (B.hasClass('external', e.target)) {
				e.preventDefault();
				window.open(e.target.href);
			};
		});

		BB.xhr();
		BB.delegate();
		BB.cardFlip();
	}
});

// Example code for XMLHttpRequest
BB.xhr = function () {
	var
	_container = document.getElementById('xhr'),
	_xhrResponse
	;

	var _init = function () {
		_initTriggers();	
	};

	var _initTriggers = function () {
		var _triggers = B.getElementsByClass('trigger', _container);

		for (var x = _triggers.length; x--;) {
			B.on('click', _triggers[x], function (e) {
				e.preventDefault();

				_getJSON(this);
			});
		};
	};

	var _displayResult = function (data) {
		var _resultDiv = B.getElementsByClass('results', _container)[0];
		var _result = JSON.parse(data);

		_resultDiv.innerHTML = '<pre>' + data + '</pre>';
	};
	
	var _getJSON = function (_url) {
		B.ajax('GET', _url, _displayResult);
	}

	if (_container) {
		_init();
	}
};

//Example of DOM manipulation and event binding/delegation
BB.delegate = function () {
	var _container = document.getElementById('delegate');
	var _results = B.getElementsByClass('results', _container)[0];

	var _init = function () {
		_initLinks();
	};

	var _initLinks = function () {
		B.on('click', _container, function(e) {
			if(B.hasClass('trigger', e.target)) {
				e.preventDefault();
				var _linkNode = B.createNode({
					'type': 'a',
					'innerHTML': 'New Link',
					'attributes': {
						'href': '#',
						'class': 'trigger'
					}
				});
				var _listItem = B.createNode({
					'type': 'li',
				});

				_listItem.appendChild(_linkNode);
				_results.appendChild(_listItem);
			}
		});
	};

	if (_container) {
		_init();
	}
};

BB.cardFlip = function () {
	var _container = document.getElementById('transforms');
	var _card, _triggers;
	var _className = 'flipped';
	
	var _init = function () {
		_card = B.getElementsByClass('flip-widget', _container)[0];
		_triggers = B.getElementsByClass('trigger', _container);
		
		_initTriggers();
	};

	_initTriggers = function () {
		B.on('click', _triggers, function (e) {
			e.preventDefault(); 

			if (B.hasClass(_className, _card)) {
				B.removeClass(_className, _card);
			} else {
				B.addClass(_className, _card);
			}
		});
	};

	if (_container) {
		_init();
	}
};
