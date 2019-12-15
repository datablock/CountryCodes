# DataBlock : Country Codes

## Install

```bash
composer install datablock/countrycodes
```

## Usage

### New instance

```php
new CountryCodes([?string $country=null]);
```

_Parameters :_

- `$country` _**string**_ to define a specific country.

_Example :_

```php
use \Datablock\CountryCodes\CountryCodes;
// ...
$countrycodes = new CountryCodes();
$countrycodes = new CountryCodes('FR');
```



### Set the country

Define or orverride the country definition :

```php
$countrycodes->setCountry(string $country);
```

_Parameters :_

- `$country` _**string**_ **(required)** to define a specific country.

```php
use \Datablock\CountryCodes\CountryCodes;
// ...
$countrycodes = new CountryCodes();
// ...
$countrycodes->setCountry('FR');
```



### Database

Getting database as PHP array :

- If the `$country` is not defined, `getDatabase` return the full database.
- If the `$country` is defined, `getDatabase` return the database for the country.

```php
$countrycodes->getDatabase([?string $country=null]);
```

- `getDatabase` return data as PHP array.
- `getJsonDatabase` return data as JSON file.

_Parameters :_

- `$country` _**string**_ to define a specific country.

_Examples :_

- _Example 1 (Full database) :_

    ```php
    use \Datablock\CountryCodes\CountryCodes;
    // ...
    $countrycodes = new CountryCodes();
    // ...
    $countrycodes->getDatabase();
    ```

- _Example 2 (Database for a specific country on instance) :_

    ```php
    use \Datablock\CountryCodes\CountryCodes;
    // ...
    $countrycodes = new CountryCodes('FR');
    // ...
    $countrycodes->getDatabase();
    ```

- _Example 3 (Database for a specific country after instance) :_

    ```php
    use \Datablock\CountryCodes\CountryCodes;
    // ...
    $countrycodes = new CountryCodes();
    // ...
    $countrycodes->setCountry('FR');
    // ...
    $countrycodes->getDatabase();
    ```

- _Example 4 (Database for a specific country only for the method) :_

    ```php
    use \Datablock\CountryCodes\CountryCodes;
    // ...
    $countrycodes = new CountryCodes();
    // ...
    $countrycodes->getDatabase('FR');
    ```


### Get Country Name

- If the `$country` is not defined, `getCountryName` return the associative array of `['country_code'] => "Country name"`.
- If the `$country` is defined, `getCountryName` return the name of the country.

```php
$countrycodes->getCountryName([?string $country=null]);
```

_Parameters_ & _Examples :_ same as [`getDatabase`](#database)



### Get the code ISO Alpha 2

- If the `$country` is not defined, `getIso2` return the associative array of `['country_code'] => "Country ISO 2"`.
- If the `$country` is defined, `getIso2` return the code iso alpha 2 of the country.

```php
$countrycodes->getIso2([?string $country=null]);
```

_Parameters_ & _Examples :_ same as [`getDatabase`](#database)



### Get the code ISO Alpha 3

- If the `$country` is not defined, `getIso3` return the associative array of `['country_code'] => "Country ISO 3"`.
- If the `$country` is defined, `getIso3` return the code iso alpha 3 of the country.

```php
$countrycodes->getIso3([?string $country=null]);
```

_Parameters_ & _Examples :_ same as [`getDatabase`](#database)



### Get the TLD

- If the `$country` is not defined, `getTld` return the associative array of `['country_code'] => "Country TLD"`.
- If the `$country` is defined, `getTld` return the TLD of the country.

```php
$countrycodes->getTld([?string $country=null]);
```

_Parameters_ & _Examples :_ same as [`getDatabase`](#database)



### Get the code FIPS

- If the `$country` is not defined, `getFips` return the associative array of `['country_code'] => "Country FIPS"`.
- If the `$country` is defined, `getFips` return the code FIPS of the country.

```php
$countrycodes->getFips([?string $country=null]);
```

_Parameters_ & _Examples :_ same as [`getDatabase`](#database)



### Get the code ISO Numeric

- If the `$country` is not defined, `getIsoNumeric` return the associative array of `['country_code'] => "Country ISO Numeric"`.
- If the `$country` is defined, `getIsoNumeric` return the code iso numeric of the country.

```php
$countrycodes->getIsoNumeric([?string $country=null]);
```

_Parameters_ & _Examples :_ same as [`getDatabase`](#database)



### Get the geoname ID

- If the `$country` is not defined, `getGeonameId` return the associative array of `['country_code'] => "Country Geoname ID"`.
- If the `$country` is defined, `getGeonameId` return the geoname ID of the country.

```php
$countrycodes->getGeonameId([?string $country=null]);
```

_Parameters_ & _Examples :_ same as [`getDatabase`](#database)



### Get the E164

- If the `$country` is not defined, `getE164` return the associative array of `['country_code'] => "Country E164"`.
- If the `$country` is defined, `getE164` return the E164 of the country.

```php
$countrycodes->getE164([?string $country=null]);
```

_Parameters_ & _Examples :_ same as [`getDatabase`](#database)



### Get the PhoneCode

- If the `$country` is not defined, `getPhoneCode` return the associative array of `['country_code'] => "Country PhoneCode"`.
- If the `$country` is defined, `getPhoneCode` return the PhoneCode of the country.

```php
$countrycodes->getPhoneCode([?string $country=null]);
```

_Parameters_ & _Examples :_ same as [`getDatabase`](#database)



### Get the Continent

- If the `$country` is not defined, `getContinent` return the associative array of `['country_code'] => "Country Continent"`.
- If the `$country` is defined, `getContinent` return the Continent of the country.

```php
$countrycodes->getContinent([?string $country=null]);
```

_Parameters_ & _Examples :_ same as [`getDatabase`](#database)



### Get the Capital

- If the `$country` is not defined, `getCapital` return the associative array of `['country_code'] => "Country Capital"`.
- If the `$country` is defined, `getCapital` return the Capital of the country.

```php
$countrycodes->getCapital([?string $country=null]);
```

_Parameters_ & _Examples :_ same as [`getDatabase`](#database)



### Get the Timezone

- If the `$country` is not defined, `getTimezone` return the associative array of `['country_code'] => "Country Timezone"`.
- If the `$country` is defined, `getTimezone` return the Timezone of the country.

```php
$countrycodes->getTimezone([?string $country=null]);
```

_Parameters_ & _Examples :_ same as [`getDatabase`](#database)



### Get the Currency

- If the `$country` is not defined, `getCurrency` return the associative array of `['country_code'] => "Country Currency"`.
- If the `$country` is defined, `getCurrency` return the Currency of the country.

```php
$countrycodes->getCurrency([?string $country=null]);
```

_Parameters_ & _Examples :_ same as [`getDatabase`](#database)



### Get the LanguageCodes

- If the `$country` is not defined, `getLanguageCodes` return the associative array of `['country_code'] => "Country LanguageCodes"`.
- If the `$country` is defined, `getCurrency` return the LanguageCodes of the country.

```php
$countrycodes->getLanguageCodes([?string $country=null]);
```

_Parameters_ & _Examples :_ same as [`getDatabase`](#database)



### Get the Languages

- If the `$country` is not defined, `getLanguages` return the associative array of `['country_code'] => "Country Languages"`.
- If the `$country` is defined, `getLanguages` return the Languages of the country.

```php
$countrycodes->getLanguages([?string $country=null]);
```

_Parameters_ & _Examples :_ same as [`getDatabase`](#database)



### Get the Area

- If the `$country` is not defined, `getArea` return the associative array of `['country_code'] => "Country Area"`.
- If the `$country` is defined, `getArea` return the Area of the country.

```php
$countrycodes->getArea([?string $country=null]);
```

_Parameters_ & _Examples :_ same as [`getDatabase`](#database)