# Larmo Server

[![Build Status](https://travis-ci.org/larmo-hub/larmo-server.svg?branch=master)](https://travis-ci.org/larmo-hub/larmo-server)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/larmo-hub/larmo-server/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/larmo-hub/larmo-server/?branch=master)
[![Code Climate](https://codeclimate.com/github/adrianpietka/larmo/badges/gpa.svg)](https://codeclimate.com/github/adrianpietka/larmo)
[![Test Coverage](https://codeclimate.com/github/adrianpietka/larmo/badges/coverage.svg)](https://codeclimate.com/github/adrianpietka/larmo/coverage)

## What is it?

This project is a PoC of a central hub that stores information from many data feeds - control version systems, Skype, IRC, etc. - in order to have a clear project history with ability to search and analyse and sending out aggregated information to different media: email, IRC, Skype, etc.

## Is it really working?

Yes, you can check the webapp under http://larmo.herokuapp.com/ - it's currently connected to our Github repo.

## Public API

```
POST /registerPacket
```

```
GET /latestMessages
```

```
GET /availableSources
```

## Composer scripts for *Larmo Server*

```bash
$: composer phplint
$: composer test
$: composer behat
```