<?php

namespace App\Entity;

use App\Repository\EcartRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=EcartRepository::class)
 */
class Ecart
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Range(
     *      min = -1,
     *      max = 36,
     *      minMessage = "Vous devez entrer un nombre supérieur à 0",
     *      maxMessage = "Vous devez entrer un nombre ne dépassant pas 36"
     * )
     */
    private $tirage;

    /**
     * @ORM\Column(type="integer")
     */
    private $douzaine1=0;

    /**
     * @ORM\Column(type="integer")
     */
    private $douzaine2=0;

    /**
     * @ORM\Column(type="integer")
     */
    private $douzaine3=0;

    /**
     * @ORM\Column(type="integer")
     */
    private $colonne1=0;

    /**
     * @ORM\Column(type="integer")
     */
    private $colonne2=0;

    /**
     * @ORM\Column(type="integer")
     */
    private $colonne3=0;

    /**
     * @ORM\Column(type="integer")
     */
    private $transversale1=0;

    /**
     * @ORM\Column(type="integer")
     */
    private $transversale2=0;

    /**
     * @ORM\Column(type="integer")
     */
    private $transversale3=0;

    /**
     * @ORM\Column(type="integer")
     */
    private $sixain1=0;

    /**
     * @ORM\Column(type="integer")
     */
    private $sixain2=0;

    /**
     * @ORM\Column(type="integer")
     */
    private $sixain3=0;

    /**
     * @ORM\Column(type="integer")
     */
    private $final1=0;

    /**
     * @ORM\Column(type="integer")
     */
    private $final2=0;

    /**
     * @ORM\Column(type="integer")
     */
    private $final3=0;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $color;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $sixain4=0;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $sixain5=0;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $sixain6=0;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $sixain7=0;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $sixain8=0;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $sixain9=0;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $sixain10=0;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $sixain11=0;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $sixain12=0;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $carre1245=0;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $carre2356=0;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $carre781011=0;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $carre891112=0;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $carre13141617=0;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $carre14151718=0;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $carre19202223=0;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $carre20212324=0;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $carre25262829=0;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $carre26272930=0;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $carre31323435=0;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $carre32333536=0;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $red=0;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $black=0;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $even=0;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $odd=0;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $half1=0;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $half2=0;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTirage(): ?int
    {
        return $this->tirage;
    }

    public function setTirage(int $tirage): self
    {
        $this->tirage = $tirage;

        return $this;
    }

    public function getDouzaine1(): ?int
    {
        return $this->douzaine1;
    }

    public function setDouzaine1(int $douzaine1): self
    {
        $this->douzaine1 = $douzaine1;

        return $this;
    }

    public function getDouzaine2(): ?int
    {
        return $this->douzaine2;
    }

    public function setDouzaine2(int $douzaine2): self
    {
        $this->douzaine2 = $douzaine2;

        return $this;
    }

    public function getDouzaine3(): ?int
    {
        return $this->douzaine3;
    }

    public function setDouzaine3(int $douzaine3): self
    {
        $this->douzaine3 = $douzaine3;

        return $this;
    }

    public function getColonne1(): ?int
    {
        return $this->colonne1;
    }

    public function setColonne1(int $colonne1): self
    {
        $this->colonne1 = $colonne1;

        return $this;
    }

    public function getColonne2(): ?int
    {
        return $this->colonne2;
    }

    public function setColonne2(int $colonne2): self
    {
        $this->colonne2 = $colonne2;

        return $this;
    }

    public function getColonne3(): ?int
    {
        return $this->colonne3;
    }

    public function setColonne3(int $colonne3): self
    {
        $this->colonne3 = $colonne3;

        return $this;
    }

    public function getTransversale1(): ?int
    {
        return $this->transversale1;
    }

    public function setTransversale1(int $transversale1): self
    {
        $this->transversale1 = $transversale1;

        return $this;
    }

    public function getTransversale2(): ?int
    {
        return $this->transversale2;
    }

    public function setTransversale2(int $transversale2): self
    {
        $this->transversale2 = $transversale2;

        return $this;
    }

    public function getTransversale3(): ?int
    {
        return $this->transversale3;
    }

    public function setTransversale3(int $transversale3): self
    {
        $this->transversale3 = $transversale3;

        return $this;
    }

    public function getSixain1(): ?int
    {
        return $this->sixain1;
    }

    public function setSixain1(int $sixain1): self
    {
        $this->sixain1 = $sixain1;

        return $this;
    }

    public function getSixain2(): ?int
    {
        return $this->sixain2;
    }

    public function setSixain2(int $sixain2): self
    {
        $this->sixain2 = $sixain2;

        return $this;
    }

    public function getSixain3(): ?int
    {
        return $this->sixain3;
    }

    public function setSixain3(int $sixain3): self
    {
        $this->sixain3 = $sixain3;

        return $this;
    }

    public function getFinal1(): ?int
    {
        return $this->final1;
    }

    public function setFinal1(int $final1): self
    {
        $this->final1 = $final1;

        return $this;
    }

    public function getFinal2(): ?int
    {
        return $this->final2;
    }

    public function setFinal2(int $final2): self
    {
        $this->final2 = $final2;

        return $this;
    }

    public function getFinal3(): ?int
    {
        return $this->final3;
    }

    public function setFinal3(int $final3): self
    {
        $this->final3 = $final3;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getSixain4(): ?int
    {
        return $this->sixain4;
    }

    public function setSixain4(?int $sixain4): self
    {
        $this->sixain4 = $sixain4;

        return $this;
    }

    public function getSixain5(): ?int
    {
        return $this->sixain5;
    }

    public function setSixain5(?int $sixain5): self
    {
        $this->sixain5 = $sixain5;

        return $this;
    }

    public function getSixain6(): ?int
    {
        return $this->sixain6;
    }

    public function setSixain6(?int $sixain6): self
    {
        $this->sixain6 = $sixain6;

        return $this;
    }

    public function getSixain7(): ?int
    {
        return $this->sixain7;
    }

    public function setSixain7(?int $sixain7): self
    {
        $this->sixain7 = $sixain7;

        return $this;
    }

    public function getSixain8(): ?int
    {
        return $this->sixain8;
    }

    public function setSixain8(?int $sixain8): self
    {
        $this->sixain8 = $sixain8;

        return $this;
    }

    public function getSixain9(): ?int
    {
        return $this->sixain9;
    }

    public function setSixain9(?int $sixain9): self
    {
        $this->sixain9 = $sixain9;

        return $this;
    }

    public function getSixain10(): ?int
    {
        return $this->sixain10;
    }

    public function setSixain10(?int $sixain10): self
    {
        $this->sixain10 = $sixain10;

        return $this;
    }

    public function getSixain11(): ?int
    {
        return $this->sixain11;
    }

    public function setSixain11(?int $sixain11): self
    {
        $this->sixain11 = $sixain11;

        return $this;
    }

    public function getSixain12(): ?int
    {
        return $this->sixain12;
    }

    public function setSixain12(?int $sixain12): self
    {
        $this->sixain12 = $sixain12;

        return $this;
    }

    public function getCarre1245(): ?int
    {
        return $this->carre1245;
    }

    public function setCarre1245(?int $carre1245): self
    {
        $this->carre1245 = $carre1245;

        return $this;
    }

    public function getCarre2356(): ?int
    {
        return $this->carre2356;
    }

    public function setCarre2356(?int $carre2356): self
    {
        $this->carre2356 = $carre2356;

        return $this;
    }

    public function getCarre781011(): ?int
    {
        return $this->carre781011;
    }

    public function setCarre781011(?int $carre781011): self
    {
        $this->carre781011 = $carre781011;

        return $this;
    }

    public function getCarre891112(): ?int
    {
        return $this->carre891112;
    }

    public function setCarre891112(?int $carre891112): self
    {
        $this->carre891112 = $carre891112;

        return $this;
    }

    public function getCarre13141617(): ?int
    {
        return $this->carre13141617;
    }

    public function setCarre13141617(?int $carre13141617): self
    {
        $this->carre13141617 = $carre13141617;

        return $this;
    }

    public function getCarre14151718(): ?int
    {
        return $this->carre14151718;
    }

    public function setCarre14151718(?int $carre14151718): self
    {
        $this->carre14151718 = $carre14151718;

        return $this;
    }

    public function getCarre19202223(): ?int
    {
        return $this->carre19202223;
    }

    public function setCarre19202223(?int $carre19202223): self
    {
        $this->carre19202223 = $carre19202223;

        return $this;
    }

    public function getCarre20212324(): ?int
    {
        return $this->carre20212324;
    }

    public function setCarre20212324(?int $carre20212324): self
    {
        $this->carre20212324 = $carre20212324;

        return $this;
    }

    public function getCarre25262829(): ?int
    {
        return $this->carre25262829;
    }

    public function setCarre25262829(?int $carre25262829): self
    {
        $this->carre25262829 = $carre25262829;

        return $this;
    }

    public function getCarre26272930(): ?int
    {
        return $this->carre26272930;
    }

    public function setCarre26272930(?int $carre26272930): self
    {
        $this->carre26272930 = $carre26272930;

        return $this;
    }

    public function getCarre31323435(): ?int
    {
        return $this->carre31323435;
    }

    public function setCarre31323435(?int $carre31323435): self
    {
        $this->carre31323435 = $carre31323435;

        return $this;
    }

    public function getCarre32333536(): ?int
    {
        return $this->carre32333536;
    }

    public function setCarre32333536(?int $carre32333536): self
    {
        $this->carre32333536 = $carre32333536;

        return $this;
    }

    public function getRed(): ?int
    {
        return $this->red;
    }

    public function setRed(?int $red): self
    {
        $this->red = $red;

        return $this;
    }

    public function getBlack(): ?int
    {
        return $this->black;
    }

    public function setBlack(?int $black): self
    {
        $this->black = $black;

        return $this;
    }

    public function getEven(): ?int
    {
        return $this->even;
    }

    public function setEven(?int $even): self
    {
        $this->even = $even;

        return $this;
    }

    public function getOdd(): ?int
    {
        return $this->odd;
    }

    public function setOdd(?int $odd): self
    {
        $this->odd = $odd;

        return $this;
    }

    public function getHalf1(): ?int
    {
        return $this->half1;
    }

    public function setHalf1(?int $half1): self
    {
        $this->half1 = $half1;

        return $this;
    }

    public function getHalf2(): ?int
    {
        return $this->half2;
    }

    public function setHalf2(?int $half2): self
    {
        $this->half2 = $half2;

        return $this;
    }
}
