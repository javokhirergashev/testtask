<?php

/** @var yii\web\View $this */

$this->title = 'Task';
?>
<style>
    @import url(https://fonts.googleapis.com/css?family=Lato:400,300,100);

    body {
        font-family: "Lato";
        background: #121212;
        overflow: hidden;
        height: 100%;
        width: 100%;
        -webkit-font-smoothing: antialiased;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    #particles-js,
    #parallax,
    .layer,
    .some-space,
    .some-more-space1 {
        height: 100%;
        position: absolute;
        width: 100%;
    }

    #particles-js {
        opacity: 0.6;
    }

    h1 {
        color: white;
        text-align: center;
        font-size: 5em;
        font-weight: 100;
        letter-spacing: 0.2em;
        position: absolute;
        top: 10%;
        left: 30%;
        -webkit-transform: translate3d(-50%, -50%, 0);
        transform: translate3d(-50%, -50%, 0);
    }

    a {
        color: white;
        border: 1px solid white;
        display: table;
        position: absolute;
        top: 65%;
        left: 50%;
        letter-spacing: 0.05em;
        -webkit-transform: translate3d(-50%, -50%, 0);
        transform: translate3d(-50%, -50%, 0);
        text-decoration: none;
        transition: all 200ms ease;
        padding: 10px 15px;
    }

    a:hover {
        background: white;
        color: black;
    }

    .some-space {
        animation: rotate 18s 0.5s infinite linear reverse;
    }

    .some-more-space1 {
        -webkit-animation: rotate 15s 0.1s infinite linear;
        animation: rotate 15s 0.1s infinite linear;
    }

    @-webkit-keyframes rotate {
        0% {
            -webkit-transform: rotateZ(0deg) translate3d(0, 1.5%, 0) rotateZ(0deg);
            transform: rotateZ(0deg) translate3d(0, 1.5%, 0) rotateZ(0deg);
        }
        100% {
            -webkit-transform: rotateZ(360deg) translate3d(0, 1.5%, 0) rotateZ(-360deg);
            transform: rotateZ(360deg) translate3d(0, 1.5%, 0) rotateZ(-360deg);
        }
    }

    @keyframes rotate {
        0% {
            -webkit-transform: rotateZ(0deg) translate3d(0, 1.5%, 0) rotateZ(0deg);
            transform: rotateZ(0deg) translate3d(0, 1.5%, 0) rotateZ(0deg);
        }
        100% {
            -webkit-transform: rotateZ(360deg) translate3d(0, 1.5%, 0) rotateZ(-360deg);
            transform: rotateZ(360deg) translate3d(0, 1.5%, 0) rotateZ(-360deg);
        }
    }

    html {
        height: 1000px;
        background: radial-gradient(ellipse at bottom, #1b2735 0%, #090a0f 100%);
        overflow: hidden;
    }

    #stars {
        width: 1px;
        height: 1px;
        background: transparent;
        box-shadow: 834px 1610px #fff, 1574px 807px #fff, 1462px 75px #fff,
        1466px 1743px #fff, 1994px 122px #fff, 395px 1428px #fff, 150px 1729px #fff,
        648px 396px #fff, 1096px 955px #fff, 451px 1534px #fff, 312px 1682px #fff,
        459px 1274px #fff, 132px 618px #fff, 1562px 1034px #fff, 726px 1887px #fff,
        201px 798px #fff, 471px 411px #fff, 1521px 259px #fff, 1590px 1911px #fff,
        727px 169px #fff, 307px 693px #fff, 1168px 243px #fff, 589px 166px #fff,
        62px 747px #fff, 995px 1783px #fff, 1489px 1599px #fff, 1885px 469px #fff,
        1816px 1605px #fff, 1836px 386px #fff, 1685px 58px #fff, 227px 1636px #fff,
        376px 1201px #fff, 1279px 1798px #fff, 1955px 1013px #fff,
        1702px 1701px #fff, 1197px 441px #fff, 1807px 898px #fff, 640px 1826px #fff,
        1438px 687px #fff, 245px 783px #fff, 392px 1070px #fff, 1814px 1014px #fff,
        1765px 1175px #fff, 485px 1043px #fff, 1592px 944px #fff, 1990px 1971px #fff,
        1129px 1227px #fff, 1972px 222px #fff, 1290px 1803px #fff,
        1395px 1674px #fff, 1565px 269px #fff, 1689px 532px #fff, 737px 1825px #fff,
        1438px 1372px #fff, 1968px 872px #fff, 1085px 325px #fff, 649px 1482px #fff,
        1585px 1845px #fff, 1489px 389px #fff, 1099px 1392px #fff,
        1226px 1536px #fff, 1630px 96px #fff, 662px 524px #fff, 781px 1837px #fff,
        1603px 613px #fff, 810px 449px #fff, 909px 1259px #fff, 261px 1737px #fff,
        1629px 177px #fff, 1928px 1183px #fff, 1025px 152px #fff, 481px 835px #fff,
        1517px 1840px #fff, 661px 122px #fff, 1077px 15px #fff, 1919px 662px #fff,
        1577px 457px #fff, 29px 1024px #fff, 242px 928px #fff, 1204px 1641px #fff,
        296px 1787px #fff, 52px 1532px #fff, 142px 118px #fff, 34px 507px #fff,
        461px 719px #fff, 922px 1808px #fff, 26px 103px #fff, 494px 349px #fff,
        1046px 555px #fff, 992px 1063px #fff, 1754px 671px #fff, 240px 1118px #fff,
        1148px 462px #fff, 1167px 565px #fff, 1742px 1640px #fff, 41px 593px #fff,
        106px 446px #fff, 1133px 963px #fff, 634px 135px #fff, 1245px 786px #fff,
        1456px 1657px #fff, 1547px 1817px #fff, 1292px 1598px #fff,
        1608px 1544px #fff, 1980px 538px #fff, 680px 317px #fff, 1150px 1440px #fff,
        1351px 628px #fff, 1018px 1217px #fff, 847px 1882px #fff, 300px 1409px #fff,
        1047px 1401px #fff, 1474px 644px #fff, 509px 194px #fff, 1084px 697px #fff,
        547px 1717px #fff, 1156px 1834px #fff, 1573px 232px #fff, 294px 1846px #fff,
        1979px 73px #fff, 412px 759px #fff, 1910px 936px #fff, 717px 1134px #fff,
        1345px 1452px #fff, 781px 863px #fff, 1121px 1106px #fff, 1994px 1118px #fff,
        1988px 148px #fff, 886px 190px #fff, 652px 1265px #fff, 1952px 199px #fff,
        1965px 1032px #fff, 1660px 1297px #fff, 1885px 1516px #fff,
        1128px 718px #fff, 1858px 264px #fff, 652px 1782px #fff, 435px 320px #fff,
        1678px 808px #fff, 950px 328px #fff, 572px 228px #fff, 462px 1985px #fff,
        971px 728px #fff, 317px 910px #fff, 1565px 194px #fff, 1888px 833px #fff,
        1474px 1791px #fff, 532px 1493px #fff, 1398px 385px #fff, 1155px 560px #fff,
        1436px 1419px #fff, 429px 1130px #fff, 1129px 1853px #fff, 538px 1149px #fff,
        294px 796px #fff, 472px 1354px #fff, 1747px 1532px #fff, 1485px 1713px #fff,
        600px 1902px #fff, 1910px 1893px #fff, 1568px 1719px #fff, 1467px 698px #fff,
        1750px 1634px #fff, 439px 1103px #fff, 993px 291px #fff, 1960px 1307px #fff,
        1010px 1269px #fff, 960px 620px #fff, 519px 1507px #fff, 334px 399px #fff,
        1712px 1055px #fff, 954px 566px #fff, 736px 1330px #fff, 1052px 34px #fff,
        1624px 1790px #fff, 329px 1296px #fff, 1097px 745px #fff, 685px 1499px #fff,
        1701px 917px #fff, 464px 760px #fff, 1250px 1737px #fff, 1750px 1402px #fff,
        638px 1480px #fff, 418px 1228px #fff, 1263px 478px #fff, 454px 1969px #fff,
        1173px 297px #fff, 67px 1963px #fff, 485px 72px #fff, 952px 1951px #fff,
        963px 914px #fff, 1955px 757px #fff, 1063px 1454px #fff, 1201px 277px #fff,
        1781px 234px #fff, 847px 1540px #fff, 474px 642px #fff, 597px 1468px #fff,
        1388px 1392px #fff, 1232px 199px #fff, 1873px 1864px #fff, 838px 729px #fff,
        1220px 442px #fff, 621px 1469px #fff, 438px 220px #fff, 1649px 1911px #fff,
        1039px 277px #fff, 1785px 702px #fff, 397px 955px #fff, 1829px 612px #fff,
        1538px 963px #fff, 471px 940px #fff, 1077px 437px #fff, 282px 821px #fff,
        124px 430px #fff, 449px 1328px #fff, 134px 1370px #fff, 131px 88px #fff,
        1949px 1273px #fff, 725px 271px #fff, 1930px 1437px #fff, 459px 9px #fff,
        1953px 1616px #fff, 1257px 845px #fff, 368px 689px #fff, 1153px 655px #fff,
        1667px 1943px #fff, 1798px 8px #fff, 790px 1902px #fff, 1322px 654px #fff,
        1455px 1881px #fff, 596px 1003px #fff, 1253px 1777px #fff, 982px 1208px #fff,
        1700px 783px #fff, 1804px 549px #fff, 1824px 814px #fff, 1162px 180px #fff,
        1297px 940px #fff, 1028px 574px #fff, 1423px 433px #fff, 1961px 1674px #fff,
        802px 484px #fff, 1299px 517px #fff, 372px 900px #fff, 1730px 664px #fff,
        1048px 58px #fff, 1234px 1475px #fff, 1610px 255px #fff, 316px 574px #fff,
        1267px 125px #fff, 862px 587px #fff, 1582px 1587px #fff, 810px 1743px #fff,
        516px 1091px #fff, 373px 709px #fff, 248px 689px #fff, 871px 1467px #fff,
        1837px 1013px #fff, 971px 1328px #fff, 1778px 377px #fff, 499px 816px #fff,
        728px 1006px #fff, 1162px 748px #fff, 99px 1649px #fff, 423px 32px #fff,
        1894px 300px #fff, 439px 1809px #fff, 166px 900px #fff, 374px 1731px #fff,
        1104px 66px #fff, 962px 1491px #fff, 1546px 1464px #fff, 1556px 1720px #fff,
        1875px 470px #fff, 331px 517px #fff, 157px 187px #fff, 326px 421px #fff,
        1129px 335px #fff, 304px 1878px #fff, 198px 1611px #fff, 983px 1098px #fff,
        1482px 1860px #fff, 1123px 1114px #fff, 2px 1395px #fff, 1480px 275px #fff,
        1794px 1635px #fff, 375px 1777px #fff, 1245px 330px #fff, 1738px 960px #fff,
        1228px 645px #fff, 480px 834px #fff, 111px 957px #fff, 31px 1617px #fff,
        703px 1492px #fff, 277px 673px #fff, 839px 771px #fff, 1146px 304px #fff,
        1039px 1662px #fff, 1088px 1297px #fff, 1985px 1540px #fff,
        1517px 1951px #fff, 1200px 1829px #fff, 242px 1548px #fff, 428px 1680px #fff,
        176px 112px #fff, 186px 756px #fff, 775px 797px #fff, 1379px 303px #fff,
        1883px 733px #fff, 335px 1753px #fff, 262px 1047px #fff, 5px 1482px #fff,
        1130px 156px #fff, 1366px 1195px #fff, 41px 1399px #fff, 1615px 1088px #fff,
        1950px 1282px #fff, 1296px 315px #fff, 884px 351px #fff, 93px 457px #fff,
        898px 521px #fff, 841px 696px #fff, 636px 1067px #fff, 448px 922px #fff,
        1370px 1716px #fff, 1499px 804px #fff, 294px 546px #fff, 1513px 82px #fff,
        1912px 623px #fff, 74px 1843px #fff, 970px 569px #fff, 819px 958px #fff,
        430px 1450px #fff, 261px 832px #fff, 1603px 22px #fff, 752px 1870px #fff,
        760px 330px #fff, 938px 1539px #fff, 1624px 222px #fff, 1678px 551px #fff,
        673px 1876px #fff, 1634px 565px #fff, 1463px 922px #fff, 1061px 1738px #fff,
        1003px 1756px #fff, 1161px 1985px #fff, 602px 1843px #fff, 1285px 317px #fff,
        1593px 1796px #fff, 965px 324px #fff, 1065px 1005px #fff, 1250px 1149px #fff,
        931px 827px #fff, 451px 626px #fff, 1897px 1092px #fff, 1862px 1578px #fff,
        297px 917px #fff, 1233px 1605px #fff, 89px 233px #fff, 1666px 1619px #fff,
        584px 699px #fff, 955px 1288px #fff, 326px 1420px #fff, 147px 1734px #fff,
        1476px 1813px #fff, 160px 275px #fff, 303px 1790px #fff, 1507px 1240px #fff,
        532px 1190px #fff, 1861px 1556px #fff, 328px 1672px #fff, 1803px 284px #fff,
        1526px 1107px #fff, 1188px 563px #fff, 1895px 1876px #fff, 1847px 807px #fff,
        1882px 1771px #fff, 675px 1345px #fff, 59px 1143px #fff, 917px 353px #fff,
        1363px 425px #fff, 1021px 1838px #fff, 1571px 305px #fff, 1559px 429px #fff,
        1470px 1531px #fff, 1141px 1791px #fff, 619px 1969px #fff, 243px 1783px #fff,
        1243px 1147px #fff, 504px 1412px #fff, 936px 1006px #fff, 1845px 1819px #fff,
        22px 841px #fff, 161px 957px #fff, 691px 1163px #fff, 1529px 849px #fff,
        1719px 301px #fff, 925px 666px #fff, 430px 210px #fff, 1044px 1922px #fff,
        797px 229px #fff, 1509px 300px #fff, 1662px 800px #fff, 1449px 289px #fff,
        850px 1748px #fff, 1932px 640px #fff, 1864px 1647px #fff, 237px 709px #fff,
        100px 963px #fff, 334px 819px #fff, 63px 933px #fff, 812px 1699px #fff,
        1985px 1305px #fff, 520px 976px #fff, 1370px 1963px #fff, 175px 617px #fff,
        1310px 1707px #fff, 863px 546px #fff, 1259px 127px #fff, 1334px 1259px #fff,
        200px 1740px #fff, 1408px 190px #fff, 845px 794px #fff, 1071px 1052px #fff,
        830px 804px #fff, 1260px 445px #fff, 494px 1174px #fff, 1583px 261px #fff,
        697px 1159px #fff, 1336px 1910px #fff, 1630px 1501px #fff, 1083px 622px #fff,
        1625px 1982px #fff, 1675px 882px #fff, 858px 1116px #fff, 487px 796px #fff,
        1682px 898px #fff, 818px 868px #fff, 821px 962px #fff, 1183px 1898px #fff,
        66px 1323px #fff, 1225px 626px #fff, 1939px 1196px #fff, 499px 1101px #fff,
        1718px 883px #fff, 1482px 1508px #fff, 1750px 1342px #fff, 567px 1446px #fff,
        588px 439px #fff, 432px 1885px #fff, 481px 1787px #fff, 473px 129px #fff,
        279px 1890px #fff, 163px 141px #fff, 1320px 1696px #fff, 559px 1253px #fff,
        1573px 852px #fff, 1481px 893px #fff, 1634px 325px #fff, 1733px 598px #fff,
        1282px 855px #fff, 355px 862px #fff, 1252px 392px #fff, 61px 1091px #fff,
        720px 1639px #fff, 1259px 1020px #fff, 954px 1572px #fff, 1699px 1603px #fff,
        236px 1045px #fff, 1839px 366px #fff, 1781px 1535px #fff, 1142px 338px #fff,
        1491px 1703px #fff, 1155px 1197px #fff, 453px 558px #fff, 1485px 1134px #fff,
        832px 339px #fff, 601px 885px #fff, 459px 1091px #fff, 1058px 497px #fff,
        537px 718px #fff, 1134px 105px #fff, 1164px 1123px #fff, 303px 1484px #fff,
        1684px 1695px #fff, 1756px 538px #fff, 1383px 1879px #fff, 797px 646px #fff,
        422px 1718px #fff, 401px 377px #fff, 1159px 271px #fff, 1564px 1398px #fff,
        244px 751px #fff, 1026px 1062px #fff, 186px 1572px #fff, 580px 1637px #fff,
        1145px 732px #fff, 829px 1033px #fff, 3px 539px #fff, 1966px 635px #fff,
        1243px 1959px #fff, 1358px 763px #fff, 1262px 759px #fff, 1642px 1625px #fff,
        213px 668px #fff, 788px 943px #fff, 179px 394px #fff, 1621px 848px #fff,
        1436px 886px #fff, 1459px 238px #fff, 956px 297px #fff, 458px 1116px #fff,
        239px 1493px #fff, 663px 1641px #fff, 1834px 1316px #fff, 1760px 1089px #fff,
        1918px 1275px #fff, 928px 934px #fff, 235px 1734px #fff, 963px 582px #fff,
        1813px 1733px #fff, 1023px 1558px #fff, 275px 407px #fff, 181px 505px #fff,
        821px 1146px #fff, 1798px 29px #fff, 1042px 1742px #fff, 1160px 411px #fff,
        51px 55px #fff, 534px 335px #fff, 1804px 126px #fff, 1620px 889px #fff,
        758px 190px #fff, 579px 710px #fff, 1447px 97px #fff, 1709px 635px #fff,
        141px 419px #fff, 855px 724px #fff, 24px 330px #fff, 1658px 1459px #fff,
        1917px 1630px #fff, 1622px 1676px #fff, 1786px 1058px #fff,
        161px 1781px #fff, 630px 1333px #fff, 1453px 46px #fff, 984px 1332px #fff,
        559px 1155px #fff, 946px 1879px #fff, 1002px 686px #fff, 1285px 758px #fff,
        594px 1641px #fff, 1919px 1357px #fff, 422px 1957px #fff, 1858px 913px #fff,
        1571px 190px #fff, 1095px 1336px #fff, 1058px 51px #fff, 1627px 1872px #fff,
        54px 1634px #fff, 1052px 687px #fff, 1867px 291px #fff, 1312px 1976px #fff,
        1505px 195px #fff, 55px 765px #fff, 806px 1430px #fff, 286px 310px #fff,
        355px 610px #fff, 1361px 397px #fff, 604px 1407px #fff, 1531px 544px #fff,
        82px 1416px #fff, 1129px 1676px #fff, 1216px 1525px #fff, 247px 865px #fff,
        1446px 1513px #fff, 229px 137px #fff, 1119px 414px #fff, 1423px 747px #fff,
        1240px 1916px #fff, 1843px 1355px #fff, 1122px 1285px #fff, 480px 359px #fff,
        485px 268px #fff, 1709px 1130px #fff, 1631px 1020px #fff, 142px 1488px #fff,
        863px 1219px #fff, 1357px 217px #fff, 1381px 759px #fff, 915px 568px #fff,
        148px 68px #fff, 175px 681px #fff, 1252px 943px #fff, 1608px 1305px #fff,
        1058px 218px #fff, 933px 197px #fff, 229px 1654px #fff, 1576px 670px #fff,
        1992px 448px #fff, 662px 1077px #fff, 626px 1477px #fff, 360px 1600px #fff,
        632px 1044px #fff, 210px 1091px #fff, 1793px 1599px #fff, 224px 1872px #fff,
        1711px 1869px #fff, 1632px 365px #fff, 1567px 749px #fff, 1599px 1738px #fff,
        393px 591px #fff, 1807px 1812px #fff, 1380px 302px #fff, 949px 1481px #fff,
        1614px 1921px #fff, 1069px 1893px #fff, 918px 283px #fff, 1252px 762px #fff,
        619px 436px #fff, 1736px 1526px #fff, 435px 657px #fff, 83px 1862px #fff,
        1707px 279px #fff, 728px 977px #fff, 1558px 447px #fff, 1965px 745px #fff,
        1114px 1659px #fff, 83px 378px #fff, 1203px 1485px #fff, 152px 1902px #fff,
        623px 26px #fff, 1662px 400px #fff, 880px 1276px #fff, 44px 826px #fff,
        789px 920px #fff, 1326px 1046px #fff, 939px 1340px #fff, 1208px 1812px #fff,
        1706px 913px #fff, 714px 910px #fff, 1648px 66px #fff, 1906px 1790px #fff,
        1441px 318px #fff, 1803px 1498px #fff, 712px 1619px #fff, 1233px 1517px #fff,
        298px 379px #fff, 341px 60px #fff, 979px 1439px #fff, 902px 1272px #fff,
        1053px 792px #fff, 1396px 1930px #fff, 396px 1246px #fff, 1952px 873px #fff,
        93px 415px #fff, 1099px 776px #fff, 1575px 433px #fff, 313px 1386px #fff,
        137px 1956px #fff, 224px 223px #fff, 1728px 1184px #fff, 1598px 69px #fff,
        1905px 522px #fff, 332px 1129px #fff, 478px 254px #fff, 754px 1739px #fff,
        762px 566px #fff, 1022px 1504px #fff, 749px 311px #fff, 1452px 187px #fff,
        1736px 1674px #fff, 492px 1677px #fff, 1148px 1117px #fff,
        1881px 1359px #fff, 1384px 1053px #fff, 380px 802px #fff, 883px 135px #fff,
        403px 915px #fff, 879px 1487px #fff, 255px 219px #fff, 1392px 1200px #fff,
        226px 179px #fff, 1748px 953px #fff, 1887px 1222px #fff, 56px 452px #fff,
        1568px 1826px #fff, 1722px 1077px #fff, 1042px 465px #fff, 272px 128px #fff,
        917px 211px #fff, 1197px 1819px #fff, 1848px 742px #fff, 866px 384px #fff,
        460px 1917px #fff, 112px 14px #fff, 1687px 1559px #fff, 260px 1666px #fff,
        726px 1297px #fff;
        animation: animStar 50s linear infinite;
    }
    #stars:after {
        content: " ";
        position: absolute;
        top: 2000px;
        width: 1px;
        height: 1px;
        background: transparent;
        box-shadow: 834px 1610px #fff, 1574px 807px #fff, 1462px 75px #fff,
        1466px 1743px #fff, 1994px 122px #fff, 395px 1428px #fff, 150px 1729px #fff,
        648px 396px #fff, 1096px 955px #fff, 451px 1534px #fff, 312px 1682px #fff,
        459px 1274px #fff, 132px 618px #fff, 1562px 1034px #fff, 726px 1887px #fff,
        201px 798px #fff, 471px 411px #fff, 1521px 259px #fff, 1590px 1911px #fff,
        727px 169px #fff, 307px 693px #fff, 1168px 243px #fff, 589px 166px #fff,
        62px 747px #fff, 995px 1783px #fff, 1489px 1599px #fff, 1885px 469px #fff,
        1816px 1605px #fff, 1836px 386px #fff, 1685px 58px #fff, 227px 1636px #fff,
        376px 1201px #fff, 1279px 1798px #fff, 1955px 1013px #fff,
        1702px 1701px #fff, 1197px 441px #fff, 1807px 898px #fff, 640px 1826px #fff,
        1438px 687px #fff, 245px 783px #fff, 392px 1070px #fff, 1814px 1014px #fff,
        1765px 1175px #fff, 485px 1043px #fff, 1592px 944px #fff, 1990px 1971px #fff,
        1129px 1227px #fff, 1972px 222px #fff, 1290px 1803px #fff,
        1395px 1674px #fff, 1565px 269px #fff, 1689px 532px #fff, 737px 1825px #fff,
        1438px 1372px #fff, 1968px 872px #fff, 1085px 325px #fff, 649px 1482px #fff,
        1585px 1845px #fff, 1489px 389px #fff, 1099px 1392px #fff,
        1226px 1536px #fff, 1630px 96px #fff, 662px 524px #fff, 781px 1837px #fff,
        1603px 613px #fff, 810px 449px #fff, 909px 1259px #fff, 261px 1737px #fff,
        1629px 177px #fff, 1928px 1183px #fff, 1025px 152px #fff, 481px 835px #fff,
        1517px 1840px #fff, 661px 122px #fff, 1077px 15px #fff, 1919px 662px #fff,
        1577px 457px #fff, 29px 1024px #fff, 242px 928px #fff, 1204px 1641px #fff,
        296px 1787px #fff, 52px 1532px #fff, 142px 118px #fff, 34px 507px #fff,
        461px 719px #fff, 922px 1808px #fff, 26px 103px #fff, 494px 349px #fff,
        1046px 555px #fff, 992px 1063px #fff, 1754px 671px #fff, 240px 1118px #fff,
        1148px 462px #fff, 1167px 565px #fff, 1742px 1640px #fff, 41px 593px #fff,
        106px 446px #fff, 1133px 963px #fff, 634px 135px #fff, 1245px 786px #fff,
        1456px 1657px #fff, 1547px 1817px #fff, 1292px 1598px #fff,
        1608px 1544px #fff, 1980px 538px #fff, 680px 317px #fff, 1150px 1440px #fff,
        1351px 628px #fff, 1018px 1217px #fff, 847px 1882px #fff, 300px 1409px #fff,
        1047px 1401px #fff, 1474px 644px #fff, 509px 194px #fff, 1084px 697px #fff,
        547px 1717px #fff, 1156px 1834px #fff, 1573px 232px #fff, 294px 1846px #fff,
        1979px 73px #fff, 412px 759px #fff, 1910px 936px #fff, 717px 1134px #fff,
        1345px 1452px #fff, 781px 863px #fff, 1121px 1106px #fff, 1994px 1118px #fff,
        1988px 148px #fff, 886px 190px #fff, 652px 1265px #fff, 1952px 199px #fff,
        1965px 1032px #fff, 1660px 1297px #fff, 1885px 1516px #fff,
        1128px 718px #fff, 1858px 264px #fff, 652px 1782px #fff, 435px 320px #fff,
        1678px 808px #fff, 950px 328px #fff, 572px 228px #fff, 462px 1985px #fff,
        971px 728px #fff, 317px 910px #fff, 1565px 194px #fff, 1888px 833px #fff,
        1474px 1791px #fff, 532px 1493px #fff, 1398px 385px #fff, 1155px 560px #fff,
        1436px 1419px #fff, 429px 1130px #fff, 1129px 1853px #fff, 538px 1149px #fff,
        294px 796px #fff, 472px 1354px #fff, 1747px 1532px #fff, 1485px 1713px #fff,
        600px 1902px #fff, 1910px 1893px #fff, 1568px 1719px #fff, 1467px 698px #fff,
        1750px 1634px #fff, 439px 1103px #fff, 993px 291px #fff, 1960px 1307px #fff,
        1010px 1269px #fff, 960px 620px #fff, 519px 1507px #fff, 334px 399px #fff,
        1712px 1055px #fff, 954px 566px #fff, 736px 1330px #fff, 1052px 34px #fff,
        1624px 1790px #fff, 329px 1296px #fff, 1097px 745px #fff, 685px 1499px #fff,
        1701px 917px #fff, 464px 760px #fff, 1250px 1737px #fff, 1750px 1402px #fff,
        638px 1480px #fff, 418px 1228px #fff, 1263px 478px #fff, 454px 1969px #fff,
        1173px 297px #fff, 67px 1963px #fff, 485px 72px #fff, 952px 1951px #fff,
        963px 914px #fff, 1955px 757px #fff, 1063px 1454px #fff, 1201px 277px #fff,
        1781px 234px #fff, 847px 1540px #fff, 474px 642px #fff, 597px 1468px #fff,
        1388px 1392px #fff, 1232px 199px #fff, 1873px 1864px #fff, 838px 729px #fff,
        1220px 442px #fff, 621px 1469px #fff, 438px 220px #fff, 1649px 1911px #fff,
        1039px 277px #fff, 1785px 702px #fff, 397px 955px #fff, 1829px 612px #fff,
        1538px 963px #fff, 471px 940px #fff, 1077px 437px #fff, 282px 821px #fff,
        124px 430px #fff, 449px 1328px #fff, 134px 1370px #fff, 131px 88px #fff,
        1949px 1273px #fff, 725px 271px #fff, 1930px 1437px #fff, 459px 9px #fff,
        1953px 1616px #fff, 1257px 845px #fff, 368px 689px #fff, 1153px 655px #fff,
        1667px 1943px #fff, 1798px 8px #fff, 790px 1902px #fff, 1322px 654px #fff,
        1455px 1881px #fff, 596px 1003px #fff, 1253px 1777px #fff, 982px 1208px #fff,
        1700px 783px #fff, 1804px 549px #fff, 1824px 814px #fff, 1162px 180px #fff,
        1297px 940px #fff, 1028px 574px #fff, 1423px 433px #fff, 1961px 1674px #fff,
        802px 484px #fff, 1299px 517px #fff, 372px 900px #fff, 1730px 664px #fff,
        1048px 58px #fff, 1234px 1475px #fff, 1610px 255px #fff, 316px 574px #fff,
        1267px 125px #fff, 862px 587px #fff, 1582px 1587px #fff, 810px 1743px #fff,
        516px 1091px #fff, 373px 709px #fff, 248px 689px #fff, 871px 1467px #fff,
        1837px 1013px #fff, 971px 1328px #fff, 1778px 377px #fff, 499px 816px #fff,
        728px 1006px #fff, 1162px 748px #fff, 99px 1649px #fff, 423px 32px #fff,
        1894px 300px #fff, 439px 1809px #fff, 166px 900px #fff, 374px 1731px #fff,
        1104px 66px #fff, 962px 1491px #fff, 1546px 1464px #fff, 1556px 1720px #fff,
        1875px 470px #fff, 331px 517px #fff, 157px 187px #fff, 326px 421px #fff,
        1129px 335px #fff, 304px 1878px #fff, 198px 1611px #fff, 983px 1098px #fff,
        1482px 1860px #fff, 1123px 1114px #fff, 2px 1395px #fff, 1480px 275px #fff,
        1794px 1635px #fff, 375px 1777px #fff, 1245px 330px #fff, 1738px 960px #fff,
        1228px 645px #fff, 480px 834px #fff, 111px 957px #fff, 31px 1617px #fff,
        703px 1492px #fff, 277px 673px #fff, 839px 771px #fff, 1146px 304px #fff,
        1039px 1662px #fff, 1088px 1297px #fff, 1985px 1540px #fff,
        1517px 1951px #fff, 1200px 1829px #fff, 242px 1548px #fff, 428px 1680px #fff,
        176px 112px #fff, 186px 756px #fff, 775px 797px #fff, 1379px 303px #fff,
        1883px 733px #fff, 335px 1753px #fff, 262px 1047px #fff, 5px 1482px #fff,
        1130px 156px #fff, 1366px 1195px #fff, 41px 1399px #fff, 1615px 1088px #fff,
        1950px 1282px #fff, 1296px 315px #fff, 884px 351px #fff, 93px 457px #fff,
        898px 521px #fff, 841px 696px #fff, 636px 1067px #fff, 448px 922px #fff,
        1370px 1716px #fff, 1499px 804px #fff, 294px 546px #fff, 1513px 82px #fff,
        1912px 623px #fff, 74px 1843px #fff, 970px 569px #fff, 819px 958px #fff,
        430px 1450px #fff, 261px 832px #fff, 1603px 22px #fff, 752px 1870px #fff,
        760px 330px #fff, 938px 1539px #fff, 1624px 222px #fff, 1678px 551px #fff,
        673px 1876px #fff, 1634px 565px #fff, 1463px 922px #fff, 1061px 1738px #fff,
        1003px 1756px #fff, 1161px 1985px #fff, 602px 1843px #fff, 1285px 317px #fff,
        1593px 1796px #fff, 965px 324px #fff, 1065px 1005px #fff, 1250px 1149px #fff,
        931px 827px #fff, 451px 626px #fff, 1897px 1092px #fff, 1862px 1578px #fff,
        297px 917px #fff, 1233px 1605px #fff, 89px 233px #fff, 1666px 1619px #fff,
        584px 699px #fff, 955px 1288px #fff, 326px 1420px #fff, 147px 1734px #fff,
        1476px 1813px #fff, 160px 275px #fff, 303px 1790px #fff, 1507px 1240px #fff,
        532px 1190px #fff, 1861px 1556px #fff, 328px 1672px #fff, 1803px 284px #fff,
        1526px 1107px #fff, 1188px 563px #fff, 1895px 1876px #fff, 1847px 807px #fff,
        1882px 1771px #fff, 675px 1345px #fff, 59px 1143px #fff, 917px 353px #fff,
        1363px 425px #fff, 1021px 1838px #fff, 1571px 305px #fff, 1559px 429px #fff,
        1470px 1531px #fff, 1141px 1791px #fff, 619px 1969px #fff, 243px 1783px #fff,
        1243px 1147px #fff, 504px 1412px #fff, 936px 1006px #fff, 1845px 1819px #fff,
        22px 841px #fff, 161px 957px #fff, 691px 1163px #fff, 1529px 849px #fff,
        1719px 301px #fff, 925px 666px #fff, 430px 210px #fff, 1044px 1922px #fff,
        797px 229px #fff, 1509px 300px #fff, 1662px 800px #fff, 1449px 289px #fff,
        850px 1748px #fff, 1932px 640px #fff, 1864px 1647px #fff, 237px 709px #fff,
        100px 963px #fff, 334px 819px #fff, 63px 933px #fff, 812px 1699px #fff,
        1985px 1305px #fff, 520px 976px #fff, 1370px 1963px #fff, 175px 617px #fff,
        1310px 1707px #fff, 863px 546px #fff, 1259px 127px #fff, 1334px 1259px #fff,
        200px 1740px #fff, 1408px 190px #fff, 845px 794px #fff, 1071px 1052px #fff,
        830px 804px #fff, 1260px 445px #fff, 494px 1174px #fff, 1583px 261px #fff,
        697px 1159px #fff, 1336px 1910px #fff, 1630px 1501px #fff, 1083px 622px #fff,
        1625px 1982px #fff, 1675px 882px #fff, 858px 1116px #fff, 487px 796px #fff,
        1682px 898px #fff, 818px 868px #fff, 821px 962px #fff, 1183px 1898px #fff,
        66px 1323px #fff, 1225px 626px #fff, 1939px 1196px #fff, 499px 1101px #fff,
        1718px 883px #fff, 1482px 1508px #fff, 1750px 1342px #fff, 567px 1446px #fff,
        588px 439px #fff, 432px 1885px #fff, 481px 1787px #fff, 473px 129px #fff,
        279px 1890px #fff, 163px 141px #fff, 1320px 1696px #fff, 559px 1253px #fff,
        1573px 852px #fff, 1481px 893px #fff, 1634px 325px #fff, 1733px 598px #fff,
        1282px 855px #fff, 355px 862px #fff, 1252px 392px #fff, 61px 1091px #fff,
        720px 1639px #fff, 1259px 1020px #fff, 954px 1572px #fff, 1699px 1603px #fff,
        236px 1045px #fff, 1839px 366px #fff, 1781px 1535px #fff, 1142px 338px #fff,
        1491px 1703px #fff, 1155px 1197px #fff, 453px 558px #fff, 1485px 1134px #fff,
        832px 339px #fff, 601px 885px #fff, 459px 1091px #fff, 1058px 497px #fff,
        537px 718px #fff, 1134px 105px #fff, 1164px 1123px #fff, 303px 1484px #fff,
        1684px 1695px #fff, 1756px 538px #fff, 1383px 1879px #fff, 797px 646px #fff,
        422px 1718px #fff, 401px 377px #fff, 1159px 271px #fff, 1564px 1398px #fff,
        244px 751px #fff, 1026px 1062px #fff, 186px 1572px #fff, 580px 1637px #fff,
        1145px 732px #fff, 829px 1033px #fff, 3px 539px #fff, 1966px 635px #fff,
        1243px 1959px #fff, 1358px 763px #fff, 1262px 759px #fff, 1642px 1625px #fff,
        213px 668px #fff, 788px 943px #fff, 179px 394px #fff, 1621px 848px #fff,
        1436px 886px #fff, 1459px 238px #fff, 956px 297px #fff, 458px 1116px #fff,
        239px 1493px #fff, 663px 1641px #fff, 1834px 1316px #fff, 1760px 1089px #fff,
        1918px 1275px #fff, 928px 934px #fff, 235px 1734px #fff, 963px 582px #fff,
        1813px 1733px #fff, 1023px 1558px #fff, 275px 407px #fff, 181px 505px #fff,
        821px 1146px #fff, 1798px 29px #fff, 1042px 1742px #fff, 1160px 411px #fff,
        51px 55px #fff, 534px 335px #fff, 1804px 126px #fff, 1620px 889px #fff,
        758px 190px #fff, 579px 710px #fff, 1447px 97px #fff, 1709px 635px #fff,
        141px 419px #fff, 855px 724px #fff, 24px 330px #fff, 1658px 1459px #fff,
        1917px 1630px #fff, 1622px 1676px #fff, 1786px 1058px #fff,
        161px 1781px #fff, 630px 1333px #fff, 1453px 46px #fff, 984px 1332px #fff,
        559px 1155px #fff, 946px 1879px #fff, 1002px 686px #fff, 1285px 758px #fff,
        594px 1641px #fff, 1919px 1357px #fff, 422px 1957px #fff, 1858px 913px #fff,
        1571px 190px #fff, 1095px 1336px #fff, 1058px 51px #fff, 1627px 1872px #fff,
        54px 1634px #fff, 1052px 687px #fff, 1867px 291px #fff, 1312px 1976px #fff,
        1505px 195px #fff, 55px 765px #fff, 806px 1430px #fff, 286px 310px #fff,
        355px 610px #fff, 1361px 397px #fff, 604px 1407px #fff, 1531px 544px #fff,
        82px 1416px #fff, 1129px 1676px #fff, 1216px 1525px #fff, 247px 865px #fff,
        1446px 1513px #fff, 229px 137px #fff, 1119px 414px #fff, 1423px 747px #fff,
        1240px 1916px #fff, 1843px 1355px #fff, 1122px 1285px #fff, 480px 359px #fff,
        485px 268px #fff, 1709px 1130px #fff, 1631px 1020px #fff, 142px 1488px #fff,
        863px 1219px #fff, 1357px 217px #fff, 1381px 759px #fff, 915px 568px #fff,
        148px 68px #fff, 175px 681px #fff, 1252px 943px #fff, 1608px 1305px #fff,
        1058px 218px #fff, 933px 197px #fff, 229px 1654px #fff, 1576px 670px #fff,
        1992px 448px #fff, 662px 1077px #fff, 626px 1477px #fff, 360px 1600px #fff,
        632px 1044px #fff, 210px 1091px #fff, 1793px 1599px #fff, 224px 1872px #fff,
        1711px 1869px #fff, 1632px 365px #fff, 1567px 749px #fff, 1599px 1738px #fff,
        393px 591px #fff, 1807px 1812px #fff, 1380px 302px #fff, 949px 1481px #fff,
        1614px 1921px #fff, 1069px 1893px #fff, 918px 283px #fff, 1252px 762px #fff,
        619px 436px #fff, 1736px 1526px #fff, 435px 657px #fff, 83px 1862px #fff,
        1707px 279px #fff, 728px 977px #fff, 1558px 447px #fff, 1965px 745px #fff,
        1114px 1659px #fff, 83px 378px #fff, 1203px 1485px #fff, 152px 1902px #fff,
        623px 26px #fff, 1662px 400px #fff, 880px 1276px #fff, 44px 826px #fff,
        789px 920px #fff, 1326px 1046px #fff, 939px 1340px #fff, 1208px 1812px #fff,
        1706px 913px #fff, 714px 910px #fff, 1648px 66px #fff, 1906px 1790px #fff,
        1441px 318px #fff, 1803px 1498px #fff, 712px 1619px #fff, 1233px 1517px #fff,
        298px 379px #fff, 341px 60px #fff, 979px 1439px #fff, 902px 1272px #fff,
        1053px 792px #fff, 1396px 1930px #fff, 396px 1246px #fff, 1952px 873px #fff,
        93px 415px #fff, 1099px 776px #fff, 1575px 433px #fff, 313px 1386px #fff,
        137px 1956px #fff, 224px 223px #fff, 1728px 1184px #fff, 1598px 69px #fff,
        1905px 522px #fff, 332px 1129px #fff, 478px 254px #fff, 754px 1739px #fff,
        762px 566px #fff, 1022px 1504px #fff, 749px 311px #fff, 1452px 187px #fff,
        1736px 1674px #fff, 492px 1677px #fff, 1148px 1117px #fff,
        1881px 1359px #fff, 1384px 1053px #fff, 380px 802px #fff, 883px 135px #fff,
        403px 915px #fff, 879px 1487px #fff, 255px 219px #fff, 1392px 1200px #fff,
        226px 179px #fff, 1748px 953px #fff, 1887px 1222px #fff, 56px 452px #fff,
        1568px 1826px #fff, 1722px 1077px #fff, 1042px 465px #fff, 272px 128px #fff,
        917px 211px #fff, 1197px 1819px #fff, 1848px 742px #fff, 866px 384px #fff,
        460px 1917px #fff, 112px 14px #fff, 1687px 1559px #fff, 260px 1666px #fff,
        726px 1297px #fff;
    }

    #stars2 {
        width: 2px;
        height: 2px;
        background: transparent;
        box-shadow: 1372px 1858px #fff, 1499px 604px #fff, 909px 906px #fff,
        1107px 943px #fff, 1697px 479px #fff, 656px 385px #fff, 966px 1628px #fff,
        194px 217px #fff, 341px 1031px #fff, 700px 1777px #fff, 112px 318px #fff,
        1998px 230px #fff, 1435px 1757px #fff, 1699px 1605px #fff, 117px 1083px #fff,
        1941px 1423px #fff, 1240px 1688px #fff, 557px 458px #fff, 1669px 1628px #fff,
        542px 875px #fff, 1530px 836px #fff, 465px 120px #fff, 667px 1189px #fff,
        568px 1177px #fff, 908px 1474px #fff, 1635px 622px #fff, 1069px 1470px #fff,
        1350px 173px #fff, 669px 1984px #fff, 591px 823px #fff, 974px 1499px #fff,
        1093px 357px #fff, 1821px 944px #fff, 981px 688px #fff, 1490px 1669px #fff,
        1364px 1964px #fff, 1625px 1841px #fff, 231px 613px #fff, 1166px 1383px #fff,
        667px 155px #fff, 706px 1834px #fff, 581px 469px #fff, 1828px 1941px #fff,
        1538px 1059px #fff, 1427px 1159px #fff, 1491px 1546px #fff, 890px 778px #fff,
        1813px 280px #fff, 1012px 1992px #fff, 143px 1095px #fff, 1847px 1747px #fff,
        1927px 525px #fff, 220px 128px #fff, 513px 1035px #fff, 176px 371px #fff,
        532px 1909px #fff, 368px 1849px #fff, 1613px 1211px #fff, 1521px 163px #fff,
        1633px 1096px #fff, 103px 1165px #fff, 1742px 1162px #fff, 1260px 439px #fff,
        413px 1383px #fff, 1496px 1917px #fff, 1345px 969px #fff, 851px 48px #fff,
        1135px 40px #fff, 422px 143px #fff, 1368px 1642px #fff, 1123px 51px #fff,
        987px 1620px #fff, 20px 1804px #fff, 1044px 1886px #fff, 1299px 147px #fff,
        1936px 607px #fff, 1344px 1086px #fff, 1329px 968px #fff, 802px 844px #fff,
        1413px 1822px #fff, 759px 1544px #fff, 515px 1359px #fff, 1102px 1176px #fff,
        261px 88px #fff, 1489px 1152px #fff, 66px 1908px #fff, 826px 154px #fff,
        628px 413px #fff, 383px 1663px #fff, 1924px 973px #fff, 258px 1604px #fff,
        465px 62px #fff, 1515px 187px #fff, 637px 142px #fff, 294px 156px #fff,
        1389px 824px #fff, 560px 5px #fff, 1261px 1708px #fff, 1587px 1399px #fff,
        1401px 1996px #fff, 1573px 973px #fff, 451px 1563px #fff, 1008px 163px #fff,
        1079px 459px #fff, 408px 1577px #fff, 1528px 1130px #fff, 808px 803px #fff,
        649px 39px #fff, 1833px 234px #fff, 174px 329px #fff, 867px 379px #fff,
        1304px 79px #fff, 357px 369px #fff, 1137px 1174px #fff, 513px 1346px #fff,
        791px 1362px #fff, 832px 383px #fff, 125px 961px #fff, 907px 1756px #fff,
        1786px 1519px #fff, 1634px 90px #fff, 320px 1377px #fff, 1832px 1651px #fff,
        385px 1220px #fff, 1372px 1073px #fff, 1074px 1064px #fff, 182px 587px #fff,
        354px 1887px #fff, 66px 1193px #fff, 1904px 1942px #fff, 320px 394px #fff,
        754px 320px #fff, 297px 1674px #fff, 311px 428px #fff, 1647px 996px #fff,
        1358px 1586px #fff, 1350px 1564px #fff, 695px 976px #fff, 913px 808px #fff,
        57px 1973px #fff, 1223px 1452px #fff, 1225px 1618px #fff, 617px 1602px #fff,
        844px 1849px #fff, 58px 1067px #fff, 47px 911px #fff, 164px 826px #fff,
        1367px 1589px #fff, 1306px 1008px #fff, 798px 1606px #fff,
        1026px 1743px #fff, 1425px 439px #fff, 1428px 825px #fff, 1301px 1114px #fff,
        208px 969px #fff, 1324px 1166px #fff, 1763px 1494px #fff, 350px 356px #fff,
        844px 83px #fff, 1814px 14px #fff, 1436px 294px #fff, 1225px 908px #fff,
        1105px 1257px #fff, 271px 1897px #fff, 940px 1516px #fff, 52px 1557px #fff,
        1027px 730px #fff, 639px 1712px #fff, 408px 1949px #fff, 1035px 1756px #fff,
        880px 577px #fff, 224px 1132px #fff, 1736px 243px #fff, 889px 1120px #fff,
        1804px 1415px #fff, 1762px 1036px #fff, 532px 306px #fff, 1870px 288px #fff,
        246px 434px #fff, 1242px 454px #fff, 861px 1172px #fff, 1651px 1000px #fff,
        513px 1645px #fff, 907px 195px #fff, 1202px 769px #fff, 710px 598px #fff,
        1672px 738px #fff, 6px 294px #fff, 1238px 613px #fff, 632px 1227px #fff,
        194px 1551px #fff, 1535px 1861px #fff, 373px 1016px #fff, 1138px 204px #fff,
        1262px 1505px #fff, 1475px 724px #fff, 732px 1992px #fff, 1243px 164px #fff,
        25px 1914px #fff, 1124px 930px #fff;
        animation: animStar 100s linear infinite;
    }
    #stars2:after {
        content: " ";
        position: absolute;
        top: 2000px;
        width: 2px;
        height: 2px;
        background: transparent;
        box-shadow: 1372px 1858px #fff, 1499px 604px #fff, 909px 906px #fff,
        1107px 943px #fff, 1697px 479px #fff, 656px 385px #fff, 966px 1628px #fff,
        194px 217px #fff, 341px 1031px #fff, 700px 1777px #fff, 112px 318px #fff,
        1998px 230px #fff, 1435px 1757px #fff, 1699px 1605px #fff, 117px 1083px #fff,
        1941px 1423px #fff, 1240px 1688px #fff, 557px 458px #fff, 1669px 1628px #fff,
        542px 875px #fff, 1530px 836px #fff, 465px 120px #fff, 667px 1189px #fff,
        568px 1177px #fff, 908px 1474px #fff, 1635px 622px #fff, 1069px 1470px #fff,
        1350px 173px #fff, 669px 1984px #fff, 591px 823px #fff, 974px 1499px #fff,
        1093px 357px #fff, 1821px 944px #fff, 981px 688px #fff, 1490px 1669px #fff,
        1364px 1964px #fff, 1625px 1841px #fff, 231px 613px #fff, 1166px 1383px #fff,
        667px 155px #fff, 706px 1834px #fff, 581px 469px #fff, 1828px 1941px #fff,
        1538px 1059px #fff, 1427px 1159px #fff, 1491px 1546px #fff, 890px 778px #fff,
        1813px 280px #fff, 1012px 1992px #fff, 143px 1095px #fff, 1847px 1747px #fff,
        1927px 525px #fff, 220px 128px #fff, 513px 1035px #fff, 176px 371px #fff,
        532px 1909px #fff, 368px 1849px #fff, 1613px 1211px #fff, 1521px 163px #fff,
        1633px 1096px #fff, 103px 1165px #fff, 1742px 1162px #fff, 1260px 439px #fff,
        413px 1383px #fff, 1496px 1917px #fff, 1345px 969px #fff, 851px 48px #fff,
        1135px 40px #fff, 422px 143px #fff, 1368px 1642px #fff, 1123px 51px #fff,
        987px 1620px #fff, 20px 1804px #fff, 1044px 1886px #fff, 1299px 147px #fff,
        1936px 607px #fff, 1344px 1086px #fff, 1329px 968px #fff, 802px 844px #fff,
        1413px 1822px #fff, 759px 1544px #fff, 515px 1359px #fff, 1102px 1176px #fff,
        261px 88px #fff, 1489px 1152px #fff, 66px 1908px #fff, 826px 154px #fff,
        628px 413px #fff, 383px 1663px #fff, 1924px 973px #fff, 258px 1604px #fff,
        465px 62px #fff, 1515px 187px #fff, 637px 142px #fff, 294px 156px #fff,
        1389px 824px #fff, 560px 5px #fff, 1261px 1708px #fff, 1587px 1399px #fff,
        1401px 1996px #fff, 1573px 973px #fff, 451px 1563px #fff, 1008px 163px #fff,
        1079px 459px #fff, 408px 1577px #fff, 1528px 1130px #fff, 808px 803px #fff,
        649px 39px #fff, 1833px 234px #fff, 174px 329px #fff, 867px 379px #fff,
        1304px 79px #fff, 357px 369px #fff, 1137px 1174px #fff, 513px 1346px #fff,
        791px 1362px #fff, 832px 383px #fff, 125px 961px #fff, 907px 1756px #fff,
        1786px 1519px #fff, 1634px 90px #fff, 320px 1377px #fff, 1832px 1651px #fff,
        385px 1220px #fff, 1372px 1073px #fff, 1074px 1064px #fff, 182px 587px #fff,
        354px 1887px #fff, 66px 1193px #fff, 1904px 1942px #fff, 320px 394px #fff,
        754px 320px #fff, 297px 1674px #fff, 311px 428px #fff, 1647px 996px #fff,
        1358px 1586px #fff, 1350px 1564px #fff, 695px 976px #fff, 913px 808px #fff,
        57px 1973px #fff, 1223px 1452px #fff, 1225px 1618px #fff, 617px 1602px #fff,
        844px 1849px #fff, 58px 1067px #fff, 47px 911px #fff, 164px 826px #fff,
        1367px 1589px #fff, 1306px 1008px #fff, 798px 1606px #fff,
        1026px 1743px #fff, 1425px 439px #fff, 1428px 825px #fff, 1301px 1114px #fff,
        208px 969px #fff, 1324px 1166px #fff, 1763px 1494px #fff, 350px 356px #fff,
        844px 83px #fff, 1814px 14px #fff, 1436px 294px #fff, 1225px 908px #fff,
        1105px 1257px #fff, 271px 1897px #fff, 940px 1516px #fff, 52px 1557px #fff,
        1027px 730px #fff, 639px 1712px #fff, 408px 1949px #fff, 1035px 1756px #fff,
        880px 577px #fff, 224px 1132px #fff, 1736px 243px #fff, 889px 1120px #fff,
        1804px 1415px #fff, 1762px 1036px #fff, 532px 306px #fff, 1870px 288px #fff,
        246px 434px #fff, 1242px 454px #fff, 861px 1172px #fff, 1651px 1000px #fff,
        513px 1645px #fff, 907px 195px #fff, 1202px 769px #fff, 710px 598px #fff,
        1672px 738px #fff, 6px 294px #fff, 1238px 613px #fff, 632px 1227px #fff,
        194px 1551px #fff, 1535px 1861px #fff, 373px 1016px #fff, 1138px 204px #fff,
        1262px 1505px #fff, 1475px 724px #fff, 732px 1992px #fff, 1243px 164px #fff,
        25px 1914px #fff, 1124px 930px #fff;
    }

    #stars3 {
        width: 3px;
        height: 3px;
        background: transparent;
        box-shadow: 736px 705px #fff, 1657px 1848px #fff, 316px 1036px #fff,
        1706px 293px #fff, 1631px 473px #fff, 1951px 211px #fff, 403px 199px #fff,
        1984px 862px #fff, 1559px 400px #fff, 509px 591px #fff, 963px 471px #fff,
        1440px 1345px #fff, 240px 706px #fff, 1902px 982px #fff, 498px 1px #fff,
        671px 596px #fff, 1894px 442px #fff, 121px 379px #fff, 1907px 1449px #fff,
        385px 588px #fff, 490px 142px #fff, 749px 1705px #fff, 678px 1824px #fff,
        1376px 788px #fff, 1651px 86px #fff, 1832px 641px #fff, 1708px 1803px #fff,
        571px 1994px #fff, 1116px 415px #fff, 509px 718px #fff, 1435px 922px #fff,
        1668px 404px #fff, 1907px 793px #fff, 755px 1413px #fff, 1630px 1873px #fff,
        469px 821px #fff, 1874px 155px #fff, 758px 494px #fff, 1889px 1681px #fff,
        177px 1123px #fff, 180px 1945px #fff, 1477px 1195px #fff, 450px 865px #fff,
        1774px 750px #fff, 994px 1387px #fff, 1781px 1268px #fff, 1810px 1103px #fff,
        1516px 1055px #fff, 1643px 1585px #fff, 382px 746px #fff, 443px 574px #fff,
        723px 215px #fff, 1849px 954px #fff, 265px 803px #fff, 751px 649px #fff,
        351px 617px #fff, 548px 1501px #fff, 1197px 1988px #fff, 395px 1177px #fff,
        407px 536px #fff, 1548px 511px #fff, 297px 1394px #fff, 1369px 1102px #fff,
        617px 687px #fff, 590px 810px #fff, 1170px 1860px #fff, 1598px 1653px #fff,
        856px 384px #fff, 1283px 226px #fff, 1602px 382px #fff, 1311px 1641px #fff,
        1662px 622px #fff, 1282px 1230px #fff, 1122px 710px #fff, 201px 494px #fff,
        318px 606px #fff, 730px 410px #fff, 1433px 1675px #fff, 1894px 1358px #fff,
        1155px 296px #fff, 490px 140px #fff, 66px 1536px #fff, 762px 1502px #fff,
        1258px 562px #fff, 431px 1228px #fff, 1978px 1257px #fff, 541px 1138px #fff,
        947px 662px #fff, 454px 1170px #fff, 396px 1075px #fff, 1793px 949px #fff,
        1173px 1361px #fff, 1264px 430px #fff, 1904px 1544px #fff,
        1301px 1395px #fff, 193px 220px #fff, 1973px 1756px #fff, 730px 1902px #fff,
        1838px 1066px #fff, 72px 131px #fff;
        animation: animStar 150s linear infinite;
    }
    #stars3:after {
        content: " ";
        position: absolute;
        top: 2000px;
        width: 3px;
        height: 3px;
        background: transparent;
        box-shadow: 736px 705px #fff, 1657px 1848px #fff, 316px 1036px #fff,
        1706px 293px #fff, 1631px 473px #fff, 1951px 211px #fff, 403px 199px #fff,
        1984px 862px #fff, 1559px 400px #fff, 509px 591px #fff, 963px 471px #fff,
        1440px 1345px #fff, 240px 706px #fff, 1902px 982px #fff, 498px 1px #fff,
        671px 596px #fff, 1894px 442px #fff, 121px 379px #fff, 1907px 1449px #fff,
        385px 588px #fff, 490px 142px #fff, 749px 1705px #fff, 678px 1824px #fff,
        1376px 788px #fff, 1651px 86px #fff, 1832px 641px #fff, 1708px 1803px #fff,
        571px 1994px #fff, 1116px 415px #fff, 509px 718px #fff, 1435px 922px #fff,
        1668px 404px #fff, 1907px 793px #fff, 755px 1413px #fff, 1630px 1873px #fff,
        469px 821px #fff, 1874px 155px #fff, 758px 494px #fff, 1889px 1681px #fff,
        177px 1123px #fff, 180px 1945px #fff, 1477px 1195px #fff, 450px 865px #fff,
        1774px 750px #fff, 994px 1387px #fff, 1781px 1268px #fff, 1810px 1103px #fff,
        1516px 1055px #fff, 1643px 1585px #fff, 382px 746px #fff, 443px 574px #fff,
        723px 215px #fff, 1849px 954px #fff, 265px 803px #fff, 751px 649px #fff,
        351px 617px #fff, 548px 1501px #fff, 1197px 1988px #fff, 395px 1177px #fff,
        407px 536px #fff, 1548px 511px #fff, 297px 1394px #fff, 1369px 1102px #fff,
        617px 687px #fff, 590px 810px #fff, 1170px 1860px #fff, 1598px 1653px #fff,
        856px 384px #fff, 1283px 226px #fff, 1602px 382px #fff, 1311px 1641px #fff,
        1662px 622px #fff, 1282px 1230px #fff, 1122px 710px #fff, 201px 494px #fff,
        318px 606px #fff, 730px 410px #fff, 1433px 1675px #fff, 1894px 1358px #fff,
        1155px 296px #fff, 490px 140px #fff, 66px 1536px #fff, 762px 1502px #fff,
        1258px 562px #fff, 431px 1228px #fff, 1978px 1257px #fff, 541px 1138px #fff,
        947px 662px #fff, 454px 1170px #fff, 396px 1075px #fff, 1793px 949px #fff,
        1173px 1361px #fff, 1264px 430px #fff, 1904px 1544px #fff,
        1301px 1395px #fff, 193px 220px #fff, 1973px 1756px #fff, 730px 1902px #fff,
        1838px 1066px #fff, 72px 131px #fff;
    }

    #title {
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        color: #fff;
        text-align: center;
        font-family: "lato", sans-serif;
        font-weight: 300;
        font-size: 50px;
        letter-spacing: 10px;
        margin-top: -60px;
        padding-left: 10px;
    }
    #title span {
        background: -webkit-linear-gradient(white, #38495a);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    @keyframes animStar {
        from {
            transform: translateY(0px);
        }
        to {
            transform: translateY(-2000px);
        }
    }

</style>

<!-- Starbackground -->
<div id='stars'></div>
<div id='stars2'></div>
<div id='stars3'></div>

<!-- parallax text/java -->
<div id="parallax">
    <div class="layer" >

        <!-- text -->
        <div class="some-space">
            <h1>Welcome To my task</h1>
        </div>

    </div>
    <div class="layer" data-depth="0.4">
        <div id="particles-js"></div>
    </div>

    <!-- Button -->
    <div class="layer" data-depth="0.3">
        <div class="some-more-space1" ><a href="<?=\yii\helpers\Url::to(["admin/"])?>" style="padding: 20px 40px;">Login</a></div>
    </div>
</div>

<script>
    $('#parallax').parallax({
        invertX: true,
        invertY: true,
        scalarX: 15,
        frictionY: .1
    });


    particlesJS("particles-js", {
        "particles": {
            "number": {
                "value": 120,
                "density": {
                    "enable": true,
                    "value_area": 800
                }
            },
            "color": {
                "value": "#ffffff"
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                },
                "polygon": {
                    "nb_sides": 5
                },
                "image": {
                    "src": "img/github.svg",
                    "width": 100,
                    "height": 100
                }
            },
            "opacity": {
                "value": 0.5,
                "random": false,
                "anim": {
                    "enable": false,
                    "speed": 1,
                    "opacity_min": 0.1,
                    "sync": false
                }
            },
            "size": {
                "value": 3,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 40,
                    "size_min": 0.1,
                    "sync": false
                }
            },
            "line_linked": {
                "enable": true,
                "distance": 150,
                "color": "#ffffff",
                "opacity": 0.4,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 6,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": true,
                    "mode": "grab"
                },
                "onclick": {
                    "enable": true,
                    "mode": "push"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 140,
                    "line_linked": {
                        "opacity": 1
                    }
                },
                "bubble": {
                    "distance": 400,
                    "size": 40,
                    "duration": 2,
                    "opacity": 8,
                    "speed": 3
                },
                "repulse": {
                    "distance": 200,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": true
    });



</script>

