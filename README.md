# Testing: Test doubles with Prophesize

## About

In this repository we have some examples of differents type of test doubles with Prophesize. 

## Types of test doubles

There are five types of test doubles:

- `Dummy` objects are passed around but never actually used. Usually they are just used to fill parameter lists.
- `Fake`  objects actually have working implementations, but usually take some shortcut which makes them not suitable for production.
- `Stubs` provide canned answers to calls made during the test, usually not responding at all to anything outside what's programmed in for the test.
- `Spies` are stubs that also record some information based on how they were called. One form of this might be an email service that records how many messages it was sent.
- `Mocks` are pre-programmed with expectations which form a specification of the calls they are expected to receive. They can throw an exception if they receive a call they don't expect and are checked during verification to ensure they got all the calls they were expecting.

## Executing tests

```bash
./vendor/bin/phpunit -c .
```