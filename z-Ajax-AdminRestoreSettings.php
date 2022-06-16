<?php
session_start();
    //estalishing connection to database 
    require_once "Z-connection.php";


      //declaring variables and gettin the value of input
    $sitename = "Robles Maternity Clinic";
    $logoLight = "webIconWhite.png";
    $logoDark = "webIcon.png";
    $vision = "A lead lying in clinic in the provision of quality affordable service in caring for women, expectant mothers, and newborn within the municipality.";
    $contact = "+63 923 020 1174";
    $location = "MacArthur Hwy, Apalit, Pampanga City";
    $email = "roblesmaternityclinic@gmail.com";
    $workingHours = "Mon-Sat: 09:00am-05:00pm";
    $htagline = "Obsetrics and Gynecology in Calumpit, Bulacan. Robles is a dedicated womens health center.";
    $hImg = "611.png";
    $hs1 = "index_slideshow1.png";
    $hs2 = "index_slideshow2.png";
    $hs3 = "index_slideshow3.png";
    $aabout = "Robles Maternity Clinic are owned by Dr. Arnel Robles and Dr. Maria Esperanza Robles. They are a couple who graduated as an ob-gyn, a doctor with expertise in female reproductive health, pregnancy, and childbirth. In 1999, the couple moved to Apalit, Pampanga, wherein they decided to start a lying-in clinic named Robles Maternity Clinic. The couple was both graduates when they decided to start their careers driven by their passion.";
    $aimg = "about_robles.png";
    $econtent = "Our team collaborated with the Robles Maternity Clinic to create a convenient obstetrical core. We are committed to providing a system that helps employees, doctors, and patients. This manner, everyone involved in the system is informed.";
    $eStaffImg = "dra.png,dr.png,arleen.png,tess.png,len.png";
    $estaffQuote = "Hard work spotlights the character of people: some turn up their sleeves, some turn up their noses, and some dont turn up at all.|()|If you want to succeed, you should strike out on new paths, rather than travel the worn paths of accepted success.|()|The most important thing about art is to work. Nothing else matters except sitting down every day and trying.|()|Define success on your own terms, achieve it by your own rules, and build a life youre proud to live.|()|The big secret in life is that there is no big secret. Whatever your goal, you can get there if youre willing to work.";
    $eStaffQuoteby = "Sam Ewing|()|John Rockefeller|()|Steven Pressfield|()|Anne Sweeney|()|Oprah Winfrey";
    $sImg = "pt_test.png,prenatal.png,postnatal.png,newborn.png,hearing.png,papsmear.png,familyplanning.png,immun.png,delivery.png,2x2(Formal).jpg";
    $sHead = "Pregnancy Test,Pre-Natal Checkup,Post-Natal Checkup,Newborn Screening,Hearing Test,Pap Smear,Family Planning,Immunization,Delivery";
    $sDesc = "A pregnancy test can tell whether you are pregnant by checking for a particular hormone in your urine or blood. The hormone is called human chorionic gonadotropin (HCG). HCG is made in a womans placenta after a fertilized egg implants in the uterus. It is normally made only during pregnancy. <br><br> A urine pregnancy test can find the HCG hormone about a week after youve missed a period. The test can be done in a health care providers office or with a home test kit. These tests are basically the same, so many women choose to use a home pregnancy test before calling a provider. When used correctly, home pregnancy tests are 97–99 percent accurate.<br><br> A pregnancy blood test is done in a health care providers office. It can find smaller amounts of HCG, and can confirm or rule out a pregnancy earlier than a urine test. A blood test can detect pregnancy even before youve missed a period. Pregnancy blood tests are about 99 percent accurate. A blood test is often used to confirm the results of a home pregnancy test.<br><br><br>|()|Pregnancy or prenatal care is medical care intended for pregnant women. At the first sign of being on the way, expectant mothers need to follow a pregnancy checkup schedule to ensure a healthy pregnancy until childbirth. During this series of visits, mothers can discuss important matters regarding their health and that of their baby with the doctor.<br><br> Another crucial aspect of the pregnancy checkup requires that soon-to-be-mothers undergo physical exams, weight checks, laboratory tests, and imaging scans. By taking these, women under prenatal care can be more confident about avoiding pregnancy-related complications such as high blood pressure or diabetes.<br></br> During pregnancy checkups, doctors can also prescribe prenatal vitamins to promote the healthy development of the fetus inside the womb. It then follows that prenatal care is a sure way for pregnant women to receive the right medication, nutrition, or treatment if needed.<br><br><br>|()|A postpartum checkup is a medical checkup you get after having a baby to make sure you’re recovering well from labor and birth. Go to your postpartum checkups, even if you’re feeling fine. They’re an important part of your overall pregnancy care. Postpartum care is important because new moms are at risk of serious and sometimes life-threatening health complications in the days and weeks after giving birth. Too many new moms have or even die from health problems that may be prevented by getting postpartum care.  <br><br>Postpartum checkups are important for any new mom. They’re especially important for moms who have a loss, including: <br><br><li> Miscarriage. This is when a baby dies in the womb before 20 weeks of pregnancy.</li><br><li>Stillbirth. This is when a baby dies in the womb after 20 weeks of pregnancy.</li><br><li> Neonatal death. This is when a baby dies in the first 28 days of life.</li><br><br>When these things happen, your postpartum checkups may help your health care provider or a genetic counselor learn more about what happened and see if you may be at risk for the same condition in another pregnancy. A genetic counselor is a person who is trained to help you understand about genes, birth defects and other medical conditions that run in families, and how they can affect your health and your babys health.<br><br><br>|()|Newborn screening helps in early identification of several genetic, endocrine and	metabolic diseases. A baby is saved 2 out of	every 3 days through newborn screenings. Saved means that a	childs	life is improved	with early detection and	intervention. Many of these	diseases if	not	caught early lead to brain damage, disability, and death. While many are not curable, they are medically manageable	if caught	early and thus improve	lives. In addition to lives saved, newborn	screenings save	money in the long run with reduced extended	care costs	and	what are called	diagnostic odyssey	costs; money spent on trying to	figure out	what is	wrong, testing for variety of rare disorders later in	life when not caught at	birth.<br><br> The screening program in	Missouri began in 1965, and	now	Missouri screens for more of these diseases	than any other state. The diseases that newborn	screenings look for do not show	any	symptoms in	the	newborns. This is why getting the screenings	within 24-48 of	birth are so important. Most children who are diagnosed	early can live full, productive	lives, and timing makes all	the	difference.The blood spot test is a simple prick in a newborns heel, placing spots of blood onto a card that is then sent to the Missouri State Public Health Lab for testing.<br><br><br>|()|Hearing tests carried out soon after birth can help identify most babies with significant hearing loss, and testing later in childhood can pick up any problems that have been missed or have been slowly getting worse.<br><br> Without routine hearing tests, theres a chance that a hearing problem could go undiagnosed for many months or even years.<br><br> Its important to identify hearing problems as early as possible because they can affect your childs speech and language development, social skills and education.<br><br> Treatment is more effective if any problems are detected and managed accordingly early on. An early diagnosis will also help ensure you and your child have access to any special support services you may need.<br><br><br>|()|A Pap smear involves collecting cells from your cervix — the lower, narrow end of your uterus thats at the top of your vagina.<br><br>  Detecting cervical cancer early with a Pap smear gives you a greater chance at a cure. A Pap smear can also detect changes in your cervical cells that suggest cancer may develop in the future. Detecting these abnormal cells early with a Pap smear is your first step in halting the possible development of cervical cancer.<br><br><br>Why its done?<br><br> A Pap smear is used to screen for cervical cancer.<br><br> The Pap smear is usually done in conjunction with a pelvic exam. In women older than age 30, the Pap test may be combined with a test for human papillomavirus (HPV) — a common sexually transmitted infection that can cause cervical cancer. In some cases, the HPV test may be done instead of a Pap smear.<br><br><br>|()|Family planning helps protect women from any health risks that may occur before, during or after childbirth. These include high blood pressure, gestational diabetes, infections, miscarriage and stillbirth.<br><br> According to studies, women who bear more than 4 children are at increased risk for maternal mortality, so they need to plan accordingly. Women who get pregnant after the age of 35 are vulnerable to health risks, so they should be protected through careful planning as well.<br><br> Also, by reducing unintended pregnancies, family planning also removes the option for unsafe abortion.<br><br><br><b>How can we help you?</b><br><br>We offer a wide scope of general and subspecialty inpatient and outpatient services that address every phase a woman experiences throughout her lifetime. We have included Family Planning as one of the modules in our regular mothers’ classes. Our trained OB-GYNs provide family planning counseling allowing our patients to choose which method is appropriate for them. We offer safe, effective, legal, non-abortifacient, and culturally acceptable family planning methods.<br><br><br>|()|Immunization, also called vaccination or shots, is an important way to protect an infants health. Vaccinations can prevent more than a dozen serious diseases. Failure to vaccinate may mean putting children at risk for serious and sometimes fatal diseases.<br><br> Infants are particularly vulnerable to infections; that is why it is so important to protect them with immunization. Immunizations help prevent the spread of disease and protect infants and toddlers against dangerous complications.<br><br> Childhood vaccines or immunizations can seem overwhelming when you are a new parent. Vaccine schedules recommended by agencies and organizations, such as the CDC, the American Academy of Pediatrics, and the American Academy of Family Physicians cover about 14 different diseases.<br><br> Vaccinations not only protect your child from deadly diseases, such as polio, tetanus, and diphtheria, but they also keep other children safe by eliminating or greatly decreasing dangerous diseases that used to spread from child to child.<br><br><br>|()|Also known as labour or delivery, is the ending of pregnancy where one or more babies leaves the uterus by passing through the vagina or by Caesarean section. In 2015, there were about 135 million births globally. About 15 million were born before 37 weeks of gestation, while between 3 and 12% were born after 42 weeks. In the developed world most deliveries occur in hospitals, while in the developing world most births take place at home with the support of a traditional birth attendant.<br><br> The most common way of childbirth is a vaginal delivery. It involves three stages of labour: the shortening and opening of the cervix during the first stage, descent and birth of the baby during the second stage, and the delivery of the placenta during the third stage. The first stage begins with crampy abdominal or back pain that lasts around half a minute and occurs every 10 to 30 minutes. The pain becomes stronger and closer together over time. The second stage ends when the infant is fully expelled. In the third stage, the delivery of the placenta, delayed clamping of the umbilical cord is generally recommended. As of 2014, all major health organisations advise that immediately following vaginal birth, or as soon as the mother is alert and responsive after a Caesarean section, that the infant be placed on the mothers chest, termed skin-to-skin contact, delaying routine procedures for at least one to two hours or until the baby has had its first breastfeeding.<br><br><br>";


            //connection to server to update
            $sqli = "UPDATE general_tb SET g_Sitename='$sitename',g_LogoLight='$logoLight',g_LogoDark='$logoDark', g_Vision='$vision',g_Contact='$contact' , g_Location='$location',g_Email='$email',g_WorkingHours='$workingHours',h_Tagline='$htagline',h_Layoutimg='$hImg',h_slide1='$hs1',h_slide2='$hs2',h_slide3='$hs3',a_about='$aabout',a_layoutimg='$aimg',e_content='$econtent',e_staffImage='$eStaffImg',e_staffQuoute='$estaffQuote',e_staffQuoteBy='$eStaffQuoteby',s_img='$sImg',s_Sheader='$sHead',s_sDesc='$sDesc' WHERE g_id=1";
            $results=mysqli_query($conn, $sqli);
            if($results)
            {
                echo "success";
            }
     
            else{
                echo "Error: " . $sqli . "" . mysqli_error($conn);
            }
    mysqli_close($conn);

?>