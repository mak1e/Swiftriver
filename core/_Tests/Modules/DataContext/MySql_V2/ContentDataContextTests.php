<?php
namespace Swiftriver\Core;

require_once 'PHPUnit/Framework.php';

class ContentDataContextTests extends \PHPUnit_Framework_TestCase
{
    public function setup()
    {
        include_once(dirname(__FILE__)."/../../../../Setup.php");
        include_once(dirname(__FILE__)."/../../../../Modules/DataContext/MySql_V2/DataContext.php");
    }

    /*
     * SaveContent Tests
     */

    public function testSaveContent()
    {
        $pdo = Modules\DataContext\MySql_V2\DataContext::PDOConnection();

        $pdo->exec("DELETE FROM SC_Content");

        $pdo->exec("DELETE FROM SC_Sources");

        $pdo = null;

        $content = new ObjectModel\Content();

        $content->id = "testId1";

        $content->state = "new_content";

        $content->date = time();

        $content->tags = array (
            new ObjectModel\Tag("testText1", "testType1"),
            new ObjectModel\Tag("testText2", "testType2"));

        $source = new ObjectModel\Source();

        $source->id = "testId1";

        $source->parent = "testParentId";

        $source->score = 1;

        $source->name = "testName";

        $source->type = "testType";

        $source->subType = "testSubType";

        $content->source = $source;

        Modules\DataContext\MySql_V2\DataContext::SaveContent(array($content));

        //@todo - working here 
    }
}
?>
