<?php
require_once "vendor/autoload.php";

use App\Model\Produto;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertIsArray;

class ProdutoTest extends TestCase
{
    private $produto;

    public static function setUpBeforeClass(): void
    {
        //Aqui o codigo será executado antes de todos os testes.
    }

    public function setUp(): void
    {
        $this->produto = new Produto();
    }    
    
    public function testGetcodproduto()
    {
        $this->assertEquals($this->produto->getcodproduto(), 0);
        $this->produto->setcodproduto(6);
        $this->assertEquals($this->produto->getcodproduto(), 6);
    }
    
    public function testGetnomeProduto()
    {
        $this->assertEquals($this->produto->getnomeProduto(), "");
        $this->produto->setnomeProduto("MOTO SERRA");
        $this->assertEquals($this->produto->getnomeProduto(), "MOTO SERRA");
    }

    public function testgetUnidade(){
        $this->assertEquals($this->produto->getUnidade(), "");
        $this->produto->setUnidade("un");
        $this->assertEquals($this->produto->getUnidade(), "un");
    }

    public function testgetvalor(){
        $this->assertEquals($this->produto->getvalor(), "");
        $this->produto->setvalor("un");
        $this->assertEquals($this->produto->getvalor(), "un");
    }

    public function testRead()
    {
        $this->assertIsArray($this->produto->read());
    }
}