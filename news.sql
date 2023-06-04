-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2023 at 07:11 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webprog`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `picture` varchar(255) NOT NULL,
  `archive` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `date`, `picture`, `archive`) VALUES
(1, 'Sva vozila proizvedena nakon srpnja 2022., morat će imati tempomat i limitator brzine', 'Svi novi automobili u Europskoj uniji, pa tako i u Hrvatskoj, bit će opremljeni tempomatom od srpnja 2022. godine, a to je obveza koja će utjecati na sve nove automobile od 2024. godine. Taj sustav, koji se može deaktivirati, može imati nekoliko oblika, uključujući autonomni limitator brzine, piše HAK revija.\r\n\r\nNajbolja učinkovitost\r\nNaime, Europska komisija usvojila je nacrt uredbe kojom se utvrđuje obvezna prisutnost uređaja za inteligentnu prilagodbu brzine (Intelligent Speed Assistance – ISA) na svim novim vozilima kao što su automobili, gospodarska vozila i teška teretna vozila, od 6. srpnja 2022. godine. Da bi se definirala najveća dopuštena brzina na pojedinim dijelovima ceste, ISA se može temeljiti na kartografskim podacima navigacijskog sustava vozila i/ili na kamerama vozila koje omogućuju prepoznavanje prometnih znakova. Europska komisija tvrdi da kombinacija ova dva izvora informacija nudi najbolju učinkovitost.\r\n\r\nProizvođači moraju osigurati pouzdanost određivanja brzine tijekom 14 godina od proizvodnje vozila. Također, Europska komisija potiče države EU da u svrhu boljeg funkcioniranja sustava vode brigu o prometnim znakovima ograničenja brzine i njihovoj vidljivosti na cestama.\r\n\r\nU svim slučajevima ISA mora obavijestiti vozača vozila o brzini koju treba poštovati. Ove informacije moraju biti dopunjene, prema izboru proizvođača, zvučnim ili haptičkim signalom ako je definirana najveća brzina prekoračena, odnosno funkcijom automatske regulacije brzine koja ima za cilj sprječavanje bilo kakvog prekoračenja. Međutim, uvijek će biti moguće ‘zaobići’ limiter, primjerice snažnijim pritiskom papučice gasa. Također je predviđeno da vozač može potpuno ili djelomično deaktivirati sustav, pojašnjeno je.\r\n\r\nAnaliza informacija\r\nU uredbi se ističe da osnovno načelo treba biti da je vozač uvijek odgovoran za poštivanje važećih prometnih pravila. Međutim, ISA se automatski ponovno aktivira svaki put kada se uključi kontakt ili se vozilo otključa. ISA prikuplja informacije koje se šalju nadležnim tijelima na analizu. One bi službeno trebali biti anonimne i nisu povezane s motornim vozilom ili pojedinim vozačem....', '2023-06-04 17:05:27', 'vijest1.jpg', 'N'),
(2, 'Prodaja novih automobila u rujnu', 'U rujnu 2021. u Hrvatskoj je novoregistrirano 2773 novih osobnih automobila, Volkswagen kao marka vodi, a model s najviše novih registracija u rujnu je Dacia Sandero sa 107 komada. Najprodavaniji model u prvih devet mjeseci je i dalje Opel Corsa sa 1691 komadom\r\n\r\nNovoregistrirano je ukupno u mjesecu rujnu 2773 novih osobnih automobila, što je ipak 41 komad manje nego u proteklom mjesecu kolovozu 2021. Uzmemo li u obzir samo mjesec rujan, to je pad od 10,3 posto u odnosu na prošlogodišnji rujan. Ove prodajne brojke odražavaju trenutnu situaciju s isporukom novih automobila zbog globalne svjetske situacije s nedostatkom elektroničkih čipova. Naime, isporuka novih automobila sada se zbog ovog problema, ali i materijala općenito, protegnula i do godinu dana. Dakle, čak i kada imate kupca novog automobila, proizvođači i trgovci ga ne mogu isporučiti kupcu.\r\n\r\nIpak, ukupna količina novoregistriranih novih automobila u prvih devet mjeseci veća nego 2020., pa je tako dosad isporučeno 37.392 novih automobila. To je porast od 24,4 posto ili 9135 automobila više, jer je lani u istom periodu bilo kupcima isporučeno 28.257 komada novih automobila. Podsjetimo, u odnosu na rekordnu 2019. kada je u prvih devet mjeseci isporučeno čak 51.337 novih automobila, i dosadašnji rezultati ove godine izgledaju tanašno. Ukupno je to pad od 27,2 posto ili čak 13.945 automobila. Ono što zabrinjava jest činjenica da unatoč sjajne turističke sezone koja još uvijek traje, ali i nešto lakše situacije s Covid-19 bolesti, sada domnira problem s isporukom čak i naručenih novih automobila. Šteta, a tako nam je dobro krenulo.\r\n\r\nVrh ljestvice prodaje novih vozila i nakon mjeseca rujna je ponovno pripao Volkswagenu, koji sa ukupno 5217 automobila drži, sada 13,95 posto tržišta. Da podsjetimo, ukupno je Volkswagen 2020. držao nešto viših 15,91 posto. I na drugom je mjestu je ponovno Škoda sa 3956 vozila ili 10,58 posto tržišta, a na trećem mjestu je i dalje Opel sa 3166 vozila ili 8,47 posto tržišta. Prve tri marke drže ukupno 33 posto udjela na tržištu novoregistriranih novih automobila u 2021-toj.\r\n\r\nPrema podacima o registracijama novih automobila u cijeloj protekloj godini, Škoda Octavia je bila na prvom mjestu s prodanih 2403 primjerka. Sada, nakon devet mjeseci ove godine nije najprodavaniji model. Opel Corsa je preuzela tu ulogu sa 1691 komadom. Druga je Škoda Octavia sa 1545 komada. Treći na listi je VW T-Cross sa 1141 komadom, a Dacia Duster je na četvrtom mjestu s 1265 komada, dok je peti na ljestvici najprodavanijih modela Dacia Sandero s 1033 prodana komada.\r\n\r\nGledamo li samo rujan 2021., onda vidimo da je Dacia Sandero bila najprodavaniji model sa 107 komada. Na drugom mjestu prema prodaji samo u mjesecu rujnu je Dacia Duster s 91 komadom, a na trećem mjestu slijedi Kia Stonic s 83 komada. Zanimljivo, Opel Corsa je, iako najprodavaniji model u prvih devet mjeseci, prema isporukama za rujan tek na 9 mjestu sa 63 komada. Čini se da uravo ovaj podatak pokazuje koliko je teška situacija s isporukama novih automobila....', '2023-06-03 17:44:47', 'vijest2.jpg', 'N'),
(3, 'Rimac predstavio Neveru', 'Rimac automobili upravo su objavili kako će se zvati serijski C_Two, a novo ime je Rimac Nevera!\r\n\r\nNikada u povijesti nije postojao automobil poput Rimac Nevere, potpuno električnog hiperautomobila sljedeće generacije koji otvara nove dimenzije u cestovnim performansama. Sa 1914 konjskih snaga iz četiri elektromotora, Nevera može ubrzati do 100 km/h za 1,85 sekundi, a do 100 milja na sat za samo 4,3 sekunde. Zapanjujuće ubrzavanje zadržava tijekom cijelog ciklusa punog gasa i dostiže 300 km/h od starta za 9,3 sekunde.\r\n\r\nNevera je proizvodna varijanta konceptnog automobila Rimac C_Two, prvi put prikazanog na Međunarodnom salonu automobila u Ženevi 2018. Od tada su inženjeri Rimac Automobila usavršavali svoj novi model na svim razinama tijekom opsežnog razvojnog programa, kako bi stvorili vrhunsko iskustvo vožnje električnog hiperautomobila. Većina ključnih komponenti Nevere razvijena je u sjedištu Rimca u Hrvatskoj, a svi su sustavi poboljšani i unaprijeđeni u odnosu na prve prototipe kako bi se postigli ambiciozni ciljevi postavljeni na početku projekta 2018. godine.\r\n\r\nS ponosom dizajnirana, razvijena i proizvedena u tvrtki Rimac Automobili u Hrvatskoj, Nevera nosi i hrvatsko ime koje uistinu odražava izvanredne performanse koje može osloboditi u tren oka. Nevera je moćna mediteranska oluja, nabijena munjom, koja se pojavljuje iznimnom brzinom i snagom. Svojom iznimnom brzinom i snagom, Rimčev hiperautomobil s neverom dijeli ne samo ime, nego i narav. Poput prirodne sile po kojoj je nazvan, jednako je sposoban u trenu promijeniti narav od sigurnog i udobnog grand tourera do automobila visokih performansi.\r\n\r\nKljuč izvanrednih performansi Nevere je u jedinstvenom električnom pogonu Rimca. Svaka komponenta električnog pogonskog sklopa Nevere je razvijena kako bi se postigao veći okretni moment, bolje performanse i povećana učinkovitost.\r\n\r\nJedinstvenu, tekućinom hlađenu bateriju u obliku slova H sa 6960 ćelija, kapaciteta 120kWh, Rimac tim je dizajnirao od nule i smjestio je u samo srce Nevere. Sposobna za proizvodnju 1,4 MW snage, litij-mangan-nikalna baterija također čini sastavni dio jezgre automobila, povećavajući strukturnu čvrstinu monokoka od karbonskih vlakana za 37 posto. Optimalno smještanje baterije nisko i po sredini poda automobila doprinosi iznimno niskom težištu. To omogućuje izvrsnu raspodjelu težine 48/52 sprijeda/straga i najbolju moguću ravnotežu upravljanja. Razvoj naprednog sustava za hlađenje baterije povećao je njegovu učinkovitost u odnosu na inicijalne C_Two prototipove, dajući veću snagu kroz duža razdoblja....', '2023-06-03 17:44:38', 'vijest3.jpeg', 'N'),
(4, 'Postupak unosa rabljenih vozila', 'Ulaskom Hrvatske u EU, postupak oko unosa rabljenih vozila prilagođen je standardima Europske unije\r\n\r\nUlaskom Hrvatske u EU, postupak oko unosa rabljenih vozila prilagođen je standardima Europske unije te se uvelike razlikuje od prijašnjeg. S obzirom da je Hrvatska postala dio jedinstvenog tržišta EU (otuda i naziv unos umjesto uvoz) više se prilikom unosa vozilo ne prijavljuje na graničnom prijelazu nego je potrebno zatražiti obračun posebnog poreza (u daljnjem tekstu PP) na motorna vozila. Također, za sva vozila koja su bila registrirana na području EU više nije potreban dokument EUR1.\r\n\r\nOno što ponekad stvara nedoumicu je plaćanje PDV-a. Ova stavka razlikuje se ovisno o tome kupuje li vozilo fizička ili pravna osoba. Fizičke osobe ne plaćaju PDV, jer je on već plaćen u zemlji EU u kojoj je vozilo kupljeno. Ukoliko je vozilo kupljeno od pravne osobe u sustavu PDV-a te je i izdana faktura sa iskazanim PDV-om kupac ima samo trošak PP-a, dok ukoliko kupuje vozilo za koje nije izdana faktura sa PDV-om dužan je u RH osim PP-a platiti i 5% prijenosa (od kataloške vrijednosti vozila). Kada pravna osoba unosi osobno vozilo za vlastite potrebe (prijevoz zaposlenika) ona je uz plaćanje PP-a obvezna platiti i PDV. U takvim situacijama u inozemstvu se dobiva račun za vozilo sa neto cijenom te se PDV od 25% plaća nakon unosa vozila i to najkasnije do zadnjeg dana idućeg mjeseca. U slučaju da je vozilo kupio distributer rabljenih vozila (kao npr. TRCZ) PDV i PP se plaća tek prilikom prodaje vozila krajnjem kupcu i obveza je kupca, a ne distributera.\r\n\r\nOsim ovih postoje još i dodatni manji troškovi kao što su trošak izrade potvrde proizvođača, potvrde o sukladnosti pojedinačno pregledanog vozila (homologacija) te naknada za zbrinjavanje (koja je trošak isključivo pravnih osoba).\r\n\r\nIpak, s obzirom da je Republika Hrvatska nova članica EU-a, prilagodba je još uvijek u tijeku te se određene izmjene mogu očekivati i nadalje...', '2023-06-03 17:44:29', 'vijest4.jpg', 'N'),
(5, 'Rent a car agencija: evo kako je osnovati i voditi', 'Rent a car agencija može biti prilično unosan biznis ako ga postavite na zdrave temelje\r\n\r\nZa nešto više od desetak godina, kupovanje stvari moglo bi zakoračiti u prošlost. Tako bar predviđaju znanstvenici i ekonomisti. Svi proizvodi će postati usluge i nećemo posjedovati apsolutno ništa. Unajmljivat ćemo sve - od bicikla, kuće, automobila do odjeće, kućnih ljubimaca pa čak i prijatelja.\r\n\r\nMožda se to u ovom trenutku čini kao smiješna ideja iz nekog futurističkog filma i možda Hrvatska nije daleko odmakla od mentaliteta ‘moje je moje’, no već svjedočimo promjeni pristupa određenim resursima, uslugama, proizvodima... Automobilima, primjerice.\r\n\r\nOsim što postaju zeleniji, na električni pogon, a pojavile su se i nove usluge, kao što je platforma Uber, ‘car pooling’ ili ‘car sharing’ (dijeljenje prijevoza i zajedničko korištenje automobila za gradsku vožnju), sve veći broj novih generacija ne želi ih imati u svom vlasništvu.\r\n\r\nUslugu rent-a-cara - generalno jednu od najpopularnijih usluga najma - preferira sve veći broj ljudi, turista i poslovnjaka, mlađih generacija više sklonih ideji rentanja - ‘toči i vozi’ - nego posjedovanja. Više nema ni pravila koji su hit mjeseci u kojima se najviše vozila iznajmljuje - jer su cijene posljednjih godina pale i najam je postao pristupačniji pa time i češći.\r\n\r\nU slučaju automobila, najam je privlačna, praktična i jednostavna usluga za korisnika. Svi troškovi o kojima biste inače kao vlasnik vozila morali voditi brigu, kao što su registracija, tehnički i sl., a o kojima u ovom slučaju brigu vodi tvrtka od koje se unajmljuje automobil, plaćaju se u jednoj jedinstvenoj dnevnoj ili mjesečnoj rati.\r\n\r\nUza sve navedeno, važno je, dakle, imati i kvalitetu u svojim redovima i biti siguran najmodavac. Što veća kvaliteta i sigurnost koja se pruža, to je veća šansa da što manje automobila danima na parking čeka svog novog unajmitelja i stvara nepotrebne troškove.', '2023-06-03 13:00:39', 'vijest5.jpg', 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
