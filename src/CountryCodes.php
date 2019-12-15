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

        $this->country = $country;
    }

    /**
     * Undocumented function
     *
     * @param string|null $country
     * @return self
     */
    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }



    public function getCountryName()
    {
        $type = "country_name";
        $database = $this->getDatabase();

        if (null != $this->country && isset($database[$type]))
        {
            return $database[$type];
        }

        return $this->getData($type);
    }

    public function getIso2()
    {
        $type = "iso2";
        $database = $this->getDatabase();

        if (null != $this->country && isset($database[$type]))
        {
            return $database[$type];
        }

        return $this->getData($type);
    }

    public function getIso3()
    {
        $type = "iso3";
        $database = $this->getDatabase();

        if (null != $this->country && isset($database[$type]))
        {
            return $database[$type];
        }

        return $this->getData($type);
    }

    public function getTld()
    {
        $type = "tld";
        $database = $this->getDatabase();

        if (null != $this->country && isset($database[$type]))
        {
            return $database[$type];
        }

        return $this->getData($type);
    }

    public function getFips()
    {
        $type = "fips";
        $database = $this->getDatabase();

        if (null != $this->country && isset($database[$type]))
        {
            return $database[$type];
        }

        return $this->getData($type);
    }

    public function getIsoNumeric()
    {
        $type = "iso_numeric";
        $database = $this->getDatabase();

        if (null != $this->country && isset($database[$type]))
        {
            return $database[$type];
        }

        return $this->getData($type);
    }

    public function getGeonameId()
    {
        $type = "geonameid";
        $database = $this->getDatabase();

        if (null != $this->country && isset($database[$type]))
        {
            return $database[$type];
        }

        return $this->getData($type);
    }

    public function getE164()
    {
        $type = "e164";
        $database = $this->getDatabase();

        if (null != $this->country && isset($database[$type]))
        {
            return $database[$type];
        }

        return $this->getData($type);
    }

    public function getPhoneCode()
    {
        $type = "phone_code";
        $database = $this->getDatabase();

        if (null != $this->country && isset($database[$type]))
        {
            return $database[$type];
        }

        return $this->getData($type);
    }

    public function getContinent()
    {
        $type = "continent";
        $database = $this->getDatabase();

        if (null != $this->country && isset($database[$type]))
        {
            return $database[$type];
        }

        return $this->getData($type);
    }

    public function getCapital()
    {
        $type = "capital";
        $database = $this->getDatabase();

        if (null != $this->country && isset($database[$type]))
        {
            return $database[$type];
        }

        return $this->getData($type);
    }

    public function getTimezone()
    {
        $type = "timezone";
        $database = $this->getDatabase();

        if (null != $this->country && isset($database[$type]))
        {
            return $database[$type];
        }

        return $this->getData($type);
    }

    public function getCurrency()
    {
        $type = "currency";
        $database = $this->getDatabase();

        if (null != $this->country && isset($database[$type]))
        {
            return $database[$type];
        }

        return $this->getData($type);
    }

    public function getLanguageCodes()
    {
        $type = "language_codes";
        $database = $this->getDatabase();

        if (null != $this->country && isset($database[$type]))
        {
            return $database[$type];
        }

        return $this->getData($type);
    }

    public function getLanguages()
    {
        $type = "languages";
        $database = $this->getDatabase();

        if (null != $this->country && isset($database[$type]))
        {
            return $database[$type];
        }

        return $this->getData($type);
    }

    public function getArea()
    {
        $type = "area_km2";
        $database = $this->getDatabase();

        if (null != $this->country && isset($database[$type]))
        {
            return $database[$type];
        }

        return $this->getData($type);
    }

    
    public function getDatabase()
    {
        if (null != $this->country && isset($this->database[$this->country]))
        {
            return $this->database[$this->country];
        }

        return $this->database;
    }

    public function getJsonDatabase()
    {
        header('content-type: text/json');
        echo json_encode($this->getDatabase());
    }

    private function getData(string $type)
    {
        $database = $this->getDatabase();
        $data = [];

        foreach ($database as $country => $value)
        {
            if (isset($value[$type]))
            {
                $data[$country] = $value[$type];
            }
        }

        return $data;
    }

}