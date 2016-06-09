<?php

use Phinx\Migration\AbstractMigration;

class InsertNewArticles extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function up()
    {
        $sql = <<<FOO
LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES (1,'Paxton Criminal Appeal Rejected','','','','The Dallas-based 5th Court of Appeals refused to toss the three felony-fraud indictments hanging over the head of Attorney General Ken Paxton.  The June 1 ruling was authored by Chief Justice Carolyn Wright.  Paxton\'s spokesperson said they are considering an appeal of the ruling before the state\'s highest criminal court.  Along with the state charges Paxton also faces federal fraud charges brought by the Securities and Exchange Commission.  The 5th Court of Appeals ruling is linked <a href=\"http://www.search.txcourts.gov/SearchMedia.aspx?MediaVersionID=a99b93aa-78a6-4f61-ac56-ec98240a6593&coa=coa05&DT=Opinion&MediaID=f6cfdc25-bf04-4ef4-a68d-be880962b3cd\"> here</a>. ','2016-06-03 21:55:39','0000-00-00 00:00:00'),(2,'TPJ Statement on Paxton Appeal Hearing','Andrew Wheat','','','Statement of Andrew Wheat, TPJ Research Director: "In asking Republican appeals judges to dismiss his criminal charges without a trial, Paxton invokes those recent precedents of Republican appellate judges dismissing corruption cases against their party’s leaders.  Let's hope these judges can exercise some judicial restraint and allow these felony charges to be tried in an open court." ','2016-06-03 21:55:39','0000-00-00 00:00:00'),(3,'Are Big Donors Abandoning Attorney General Ken Paxton?','Andrew Wheat','','','By TPJ\'s Andrew Wheat, Texas Observer, April 29, 2016 Texas Attorney General Ken Paxton’s prodigious political fundraising plummeted after his criminal indictments in the summer of 2015. This could suggest that some donors are quietly rethinking their support of the embroiled attorney general, even as top GOP leaders have refrained from commenting on the plight of Paxton — a headliner at the Texas GOP Convention that opens in Dallas in May. <a href=\"https://www.texasobserver.org/big-donors-abandon-ken-paxton/\">(Read more).</a> ','2016-06-03 21:55:39','0000-00-00 00:00:00'),(4,'Lobby Watch: Socialized Medicine for GOP Functionary','','','','The top Paxton aide who secretly arranged to stay on the state payroll while running a Cruz PAC spent recent years fighting the twin evils of Obamacare and his own cancer.  It takes a special kind of person to simultaneously struggle to secure taxpayer-funded health benefits for himself while fighting to deny such benefits to millions of others.<a href=\"http://info.tpj.org/Lobby_Watch/pdf/ChipRoy.pdf\"> Lobby Watch examines special boy Chip Roy.</a>','2016-06-03 21:55:39','0000-00-00 00:00:00'),(5,'SEC files federal fraud charges against AG Paxton','Craig McDonald','','','\"It is now Attorney General Paxton\'s full-time job to defend himself from an avalanche of serious civil and criminal charges. Texas needs an attorney general who can aggressively pursue wrongdoing--not just defend himself from it. Paxton\'s greatest service to this state would be his resignation.\"From the Houston Chronicle:The U.S. Securities and Exchange Commission on Monday filed civil charges in federal court against Texas Attorney General Ken Paxton, alleging that he recruited investors for a company without disclosing that he was being compensated to promote the company\'s stock.<a href=\"https://www.sec.gov/news/pressrelease/2016-65.html\">The charges</a>, which were filed in a Sherman-based court, allege that Paxton raised $840,000 in investor funds for Servergy, Inc., and received 100,000 shares of stock in return. Charges were also filed against Servergy and former company officials William E. Mapp III and Caleb White. As of Monday, Servergy and White had settled their cases, according to the SEC.','2016-06-03 21:55:39','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;
FOO;
        $this->execute($sql);
    }

    public function down()
    {
        $this->execute("truncate article");
    }
}
