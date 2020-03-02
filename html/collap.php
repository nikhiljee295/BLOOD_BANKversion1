<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.collapsible {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}
</style>
</head>
<body>


<h2>BLOOD BANK</h2>

<p>        </p>
<button class="collapsible">ABOUT BLOOD BANK</button>
<div class="content">
  <p>A blood bank is a place designed especially for the storage of blood and blood products. Large coolers hold these products at a constant temperature and they are available at a moment's notice.
</div>

<h2>BLOOD TIPS</h2>
<button type="button" class="collapsible">BEAT THE MYTH</button>
<div class="content">
  <p>Donating blood is safe and simple. It takes approximately 10-15 minutes to complete the blood donation process. Any healthy adult between 18 years and 60 years of age can donate blood. This is what you can expect when you are ready to donate blood:</p>
<P>.You walk into a reputed and safe blood donation centre or a mobile camp organized by a reputed institution.</P>
<p>.A few questions will be asked to determine your health status (general questions on health, donation history etc). Usually you will be asked to fill out a short form.</p>
<p>.Then a quick physical check will be done to check temperature, blood pressure, pulse and hemoglobin content in blood to ensure you are a healthy donor.</p>
<p>.If found fit to donate, then you will be asked to lie down on a resting chair or a bed. Your arm will be thoroughly cleaned. Then using sterile equipments blood will be collected in a special plastic bag. Approximately 350 ml of blood will be collected in one donation. Those who weigh more than 60 Kg can donate 450 ml of blood</p>
<p>.Then you must rest and relax for a few minutes with a light snack and something refreshing to drink. Some snacks and juice will be provided.</p>
<p>.lood will be separated into components within eight hours of donation</p>
<p>.The blood will then be taken to the laboratory for testing.</p>
<p>.Once found safe, it will be kept in special storage and released when required.</p>
<p>.The blood is now ready to be taken to the hospital, to save lives.</p>
</div>
<P>                 </P>
<button type="button" class="collapsible">BLOOD GROUPS</button>
<div class="content">
  <p> Blood type is determined by which antibodies and antigens the person's blood produces. An individual has two types of blood groups namely ABO-grouping and Rh-grouping. Rh is called as the Rhesus factor that has come to us from Rhesus monkeys.

<P>Most humans are in the ABO blood group. The ABO group has four categories namely
1.) A group 2.) B group 3.) O group and 4.) AB group
In the Rh- group, either the individual is said to be Rh- Negative or Rh- Positive.</P>

<p>Thus blood group of any human being will mainly fall in any one of the following groups.</p>
<P>A positive or A negative</p>
<P>B positive or B negative</p>
<P>O positive or O negative</p>
<P>AB positive or AB negative.</p>
</div>

<P>          </p>
<button type="button" class="collapsible">UNIVERSAL DONAR AND RECIPIENTS</button>
<div class="content">
<P> The most common blood type is O, followed by type A.</P>

<P>Type O individuals are often called "universal donors" since their blood can be transfused into persons with any blood type. Those with type AB blood are called "universal recipients" because they can receive blood of any type.,</P>

<p>However, since approximately twice as many people in the general population have O and A blood types, a blood bank's need for this type of blood increases exponentially.</p>
</div>



<p>          </p>
<button type="button" class="collapsible">DO DONATE BLOOD, ONLY IF YOU SATISFY ALL OF THE FOLLOWING CONDITIONS</button>
<div class="content">
 
	 <p>You are between age group of 18-60 years.</p>
	 <p>Your weight is 45 kgs or more.</p>
	 <p>Your hemoglobin is 12.5 gm% minimum.</p>
	 <p>Your last blood donation was 3 or more months earlier.</p>
	 <p>You are healthy and have not suffered from malaria, typhoid or other transmissible disease in the recent past.</p>
</div>


<p>          </p>
<button type="button" class="collapsible">DO NOT DONATE BLOOD, IF YOUU HAVE ANY  OF THE FOLLOWING CONDITIONS </button>
<div class="content">
  <p>-	Cold / fever in the past 1 week.</P>
 <p>-	Under treatment with antibiotics or any other medication..</P>
 <p>-	Cardiac problems, hypertension, epilepsy, diabetes (on insulin therapy), history of cancer, chronic kidney or liver disease, bleeding tendencies, venereal disease etc..</P>
 <p>-	Major surgery in the last 6 months..</P>
 <p>-	Vaccination in the last 24 hours..</P>
 <p>-	Had a miscarriage in the last 6 months or have been pregnant / lactating in the last one year..</P>
 <p>-	Had fainting attacks during last donation..</P>
 <p>-	Have regularly received treatment with blood products..</P>
 <p>-	Shared a needle to inject drugs/ have history of drug addiction..</P>
 <p>-	Had sexual relations with different partners or with a high risk individual..</P>
 <p>-	Been tested positive for antibodies to HIV.</p>
</div>


<p>          </p>
<p>          </p>
<button type="button" class="collapsible">A HEALTHY DONAR</button>
<div class="content">
  <p>A healthy diet helps ensure a successful blood donation, and also makes you feel better! Check out the following recommended foods to eat prior to your donation.</p>

	 <p>.Low fat foods</p>
	 <p>.Iron rich foods</p>

</div>


<p>          </p>
<button type="button" class="collapsible">ABOUT BLOOD DONATION</button>
<div class="content">
  <p>Donating blood is a life saving measure especially when you have a rare blood type. Blood donation is safe and simple. It takes only about 10 minutes to donate blood - less than the time of an average telephone call. We can save upto 3 to 4 precious lives by donating blood.</p>
</div>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>

</body>
</html>
