# Larmo

[![Build Status](https://travis-ci.org/adrianpietka/larmo.svg?branch=master)](https://travis-ci.org/adrianpietka/larmo)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/adrianpietka/larmo/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/adrianpietka/larmo/?branch=master)
[![Code Climate](https://codeclimate.com/github/adrianpietka/larmo/badges/gpa.svg)](https://codeclimate.com/github/adrianpietka/larmo)
[![Test Coverage](https://codeclimate.com/github/adrianpietka/larmo/badges/coverage.svg)](https://codeclimate.com/github/adrianpietka/larmo/coverage)

## What is it?
This project is a PoC of a central hub that stores information from many data feeds - control version systems, Skype, IRC, etc. - in order to have a clear project history with ability to search and analyse and sending out aggregated information to different media: email, IRC, Skype, etc.

## Directory structure

* agents/ -
* hub/ -
* webapp/ -

## Composer scripts for Larmo Hub

```bash
$: cd hub/
$: composer phplint
$: composer test
$: composer behat
```