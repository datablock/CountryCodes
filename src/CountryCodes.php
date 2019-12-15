<?php
namespace Datablock\CountryCodes;

class CountryCodes
{
    const DB = __DIR__."/../database/database.php";
    private $database = [];
    private $country;

    public function __construct(?string $country=null)
    {
        if (file_exists(self::DB))
        {
            $this->database = include_once self::DB;
        }

        $this->setCountry($country);
    }

    /**
     * Define a specific country after instance
     *
     * @param string|null $country
     * @return self
     */
    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get the database
     *
     * @param string|null $country
     * @return array
     */
    public function getDatabase(?string $country=null): array
    {
        $country = $this->isValidCountry($country) 
            ? $country 
            : $this->country;

        return $country 
            ? $this->database[$country]
            : $this->database;
    }

    /**
     * Get the database as JSON file
     *
     * @param string|null $country
     * @return string|array
     */
    public function getJsonDatabase(?string $country=null)
    {
        header('content-type: text/json');
        echo json_encode($this->getDatabase($country));
        exit;
    }

    /**
     * @param string|null $country
     * @return string|array
     */
    public function getCountryName(?string $country=null)
    {
        return $this->getData($country, "country_name");
    }

    /**
     * @param string|null $country
     * @return string|array
     */
    public function getIso2(?string $country=null)
    {
        return $this->getData($country, "iso2");
    }

    /**
     * @param string|null $country
     * @return string|array
     */
    public function getIso3(?string $country=null)
    {
        return $this->getData($country, "iso3");
    }

    /**
     * @param string|null $country
     * @return string|array
     */
    public function getTld(?string $country=null)
    {
        return $this->getData($country, "tld");
    }

    /**
     * @param string|null $country
     * @return string|array
     */
    public function getFips(?string $country=null)
    {
        return $this->getData($country, "fips");
    }

    /**
     * @param string|null $country
     * @return string|array
     */
    public function getIsoNumeric(?string $country=null)
    {
        return $this->getData($country, "iso_numeric");
    }

    /**
     * @param string|null $country
     * @return string|array
     */
    public function getGeonameId(?string $country=null)
    {
        return $this->getData($country, "geonameid");
    }

    /**
     * @param string|null $country
     * @return string|array
     */
    public function getE164(?string $country=null)
    {
        return $this->getData($country, "e164");
    }

    /**
     * @param string|null $country
     * @return string|array
     */
    public function getPhoneCode(?string $country=null)
    {
        return $this->getData($country, "phone_code");
    }

    /**
     * @param string|null $country
     * @return string|array
     */
    public function getContinent(?string $country=null)
    {
        return $this->getData($country, "continent");
    }

    /**
     * @param string|null $country
     * @return string|array
     */
    public function getCapital(?string $country=null)
    {
        return $this->getData($country, "capital");
    }

    /**
     * @param string|null $country
     * @return string|array
     */
    public function getTimezone(?string $country=null)
    {
        return $this->getData($country, "timezone");
    }

    /**
     * @param string|null $country
     * @return string|array
     */
    public function getCurrency(?string $country=null)
    {
        return $this->getData($country, "currency");
    }

    /**
     * @param string|null $country
     * @return string|array
     */
    public function getLanguageCodes(?string $country=null)
    {
        return $this->getData($country, "language_codes");
    }

    /**
     * @param string|null $country
     * @return string|array
     */
    public function getLanguages(?string $country=null)
    {
        return $this->getData($country, "languages");
    }

    /**
     * @param string|null $country
     * @return string|array
     */
    public function getArea(?string $country=null)
    {
        return $this->getData($country, "area_km2");
    }

    /**
     * @param string|null $country
     * @return string|array
     */
    private function getData(?string $country, string $type)
    {
        // Define and check $Country
        $country = $this->isValidCountry($country) 
            ? $country 
            : $this->country;

        // Define database
        $database = $this->getDatabase($country);

        // return the string of data
        if (null != $country) 
        {
            return $database[$type] ?? null;
        }

        // return an array of data
        $data = [];
        foreach ($database as $key => $value)
        {
            if (isset($value[$type]))
            {
                $data[$key] = $value[$type];
            }
        }

        return $data;
    }

    /**
     * @param string|null $country
     * @return string|array
     */
    private function isValidCountry(?string $country)
    {
        return isset($this->database[$country]);
    }
}