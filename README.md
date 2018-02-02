# Class User - Documentation

## Table of Contents

* [User](#user)
    * [__construct](#__construct)
    * [set](#set)
    * [get](#get)
    * [checkCredential](#checkcredential)

## User

Class User



* Full name: \ramon1611\Libs\User


### __construct

Constructor

```php
User::__construct( array $userData = NULL ): void
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$userData` | **array** | Array of user data. Default is NULL |




---

### set

Set user data

```php
User::set( array $userData ): boolean
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$userData` | **array** | Array of user data |




---

### get

Get user data

```php
User::get(  ): array
```





**Return Value:**

Returns an array of user data



---

### checkCredential

Check user credential

```php
User::checkCredential( string $password ): boolean
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$password` | **string** | Plain text password |




---



--------
> This document was automatically generated from source code comments on 2018-02-02 using [phpDocumentor](http://www.phpdoc.org/) and [cvuorinen/phpdoc-markdown-public](https://github.com/cvuorinen/phpdoc-markdown-public)
