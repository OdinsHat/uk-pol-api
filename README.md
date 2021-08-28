# UK Parliament Political API

This client API SDK is a wrapper for easily accessing the newest and
definitive [UK Parliementary data](https://developer.parliament.uk).

The data is held under
the [UK Open Parliament license](https://www.parliament.uk/site-information/copyright-parliament/open-parliament-licence/)
.

At time of writing no API keys are required or authentication to access this data.

The client API uses the GuzzleHttp library to make calls to the API endpoints provided and as of writing covers
constituencies (Locations) and Members (MPs). Support for other datatypes will be added at a later date.

Data available through the API includes:

* [Constituency Locations](https://members-api.parliament.uk/index.html)
* [Members](https://members-api.parliament.uk/index.html)

## Installation

## Examples

## Contributing

I'm always open to contribution but you will need to meet a few important criteria to submit a Pull Request.

1. Any and all tests must pass and any new code must have tests.
2. Code must pass the Psalm static analysis tool which can be run from the root dir of the repo by `composer analyze`
3. Code must be run through php-cs-fixer to ensure code readability and consistency with `composer fix`
4. Code must pass the checks made during a PR request to be accepted. If it fails, don't be disheartened. You cna
   details and how to fix the issues form the links in the PR

## ToDos

* Finish implementing Location and Members API endpoints.
* Add Lords endpoint.
* Add questions endpoint.
* Add Questions and Bills endpoints.