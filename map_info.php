<?php
/**
 * Data for Google map
 * Date: 2/20/14 updated 9/11/14
 */
?>
    

// marker - T116 //

var marker_T116 = new google.maps.Marker({
map: map,
draggable: false,
position: T116,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T116 = document.createElement("div");
boxText_T116.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T116.innerHTML = '<div style="padding: 20px;"><h1>Mexico - Queretaro</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">Reaching The Stars (RTS) is a ministry with International Teams created to impact the business community - business people, professionals, and people of influence - with the gospel, so that they may come to a saving knowledge of Jesus and become His disciples. We want to see these men and women have an encounter with God, understand the purposes of God in their lives, and impact the business community with the gospel.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/mexico-queretaro/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T116
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T116 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T116, 'click', function() {
ib_T116.open(map,marker_T116);
});

// end info window - T116 //

// marker - T118 //

var marker_T118 = new google.maps.Marker({
map: map,
draggable: false,
position: T118,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T118 = document.createElement("div");
boxText_T118.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T118.innerHTML = '<div style="padding: 20px;"><h1>Spain - Villamayor de Monjardin</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">By providing a warm bed and a healthy meal to thousands of pilgrims that trek across Spain, we also find opportunities to share the message of love and redemption through Jesus. Camino de Santiago pilgrims are men and women from over 100 different nations, who sometimes spend weeks or months on pilgrimage. About 1,000 people a day start their pilgrimage, and most walk over 25 km (15 miles) per day. Many of these travelers are seeking a life-changing journey, with questions and ideas about the purpose of life. The ministry seeks to give people the chance to have contact with Jesus, through hospitality, conversations with believers, and an invitation to attend a Jesus meditation in the evenings. The hostel is located in the small village of Villamayor de Monjardin, approximately 100 kilometers from the beginning of the pilgrimage in the Pyrenees Mountains. It provides rustic and cozy accommodation for 25 pilgrims.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/spain-villamayor-de-monjardin/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T118
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T118 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T118, 'click', function() {
ib_T118.open(map,marker_T118);
});

// end info window - T118 //

// marker - T119 //

var marker_T119 = new google.maps.Marker({
map: map,
draggable: false,
position: T119,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T119 = document.createElement("div");
boxText_T119.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T119.innerHTML = '<div style="padding: 20px;"><h1>USA - East Side - Joilet IL</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">Description pending...</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/usa-east-side-joilet-il/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T119
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T119 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T119, 'click', function() {
ib_T119.open(map,marker_T119);
});

// end info window - T119 //

// marker - T121 //

var marker_T121 = new google.maps.Marker({
map: map,
draggable: false,
position: T121,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T121 = document.createElement("div");
boxText_T121.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T121.innerHTML = '<div style="padding: 20px;"><h1>South Africa - Mzamomhle</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">This is a pioneer team working in the township of Mzamomhle, just outside the city of East London. Our vision is to see this community transformed from the inside out, building on already existing resources and leadership. As this ministry is still very young, there is ample opportunity for growth. We are partnering with a local NGO called Lathitha Development, who work to affect the 80 percent unemployment rate in this township of 40,000 people. We seek to work from within the community, using community led initiatives.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/south-africa-mzamomhle/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T121
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T121 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T121, 'click', function() {
ib_T121.open(map,marker_T121);
});

// end info window - T121 //

// marker - T601 //

var marker_T601 = new google.maps.Marker({
map: map,
draggable: false,
position: T601,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T601 = document.createElement("div");
boxText_T601.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T601.innerHTML = '<div style="padding: 20px;"><h1>Albania - Erseke</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">We want to see lives and communities transformed by the power of God with an ever growing number of disciples and churches across Albania engaged in reflecting and sharing the love of Jesus. Local church ministries include regular weekly worship services as well as weekly programs for children, youth, young adults, women and men. There are new church opportunities in nearby towns and villages. We engage in camp and conference ministries from approximately April - September. Leadership development is key, with regular meetings and ongoing training opportunities that include encouragement and accountability for all our staff. There is a Bible School (October - March). Udhekryq is a Capernwary Torchbearer Bible School.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/albania-erseke/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T601
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T601 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T601, 'click', function() {
ib_T601.open(map,marker_T601);
});

// end info window - T601 //

// marker - T805 //

var marker_T805 = new google.maps.Marker({
map: map,
draggable: false,
position: T805,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T805 = document.createElement("div");
boxText_T805.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T805.innerHTML = '<div style="padding: 20px;"><h1>Argentina - Buenos Aires</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">We focus on building bridges to the professionals, business leaders, and people of influence in Buenos Aires, Argentina. There are over 2 million professionals, business leaders, and people of influence in the greater Buenos Aires area. We are the only ministry we are aware of that is introducing Jesus to individuals in this area of the population. Our vision is to begin a movement of discipleship among this group of influential people.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/argentina-buenos-aires/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T805
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T805 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T805, 'click', function() {
ib_T805.open(map,marker_T805);
});

// end info window - T805 //

// marker - T767 //

var marker_T767 = new google.maps.Marker({
map: map,
draggable: false,
position: T767,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T767 = document.createElement("div");
boxText_T767.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T767.innerHTML = '<div style="padding: 20px;"><h1>Austria - Fellowship of Christian Refugees (FCR)</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">We exist to help refugees lead lives of faith and service both among fellow refugees and local Austrians. FCR offers training and service, ensures integration into local communities and churches, implements opportunities for spiritual growth, builds local networks, assists local and international partners of FCR to establish new churches with the networks of FCR communities.  What makes FCR unique is that it is refugee-to-refugee and emphasizes discipleship and service. We focus on kitchen and hospitality ministries, music and outreach, maintenance and service, mentoring and training.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/austria-fellowship-of-christian-refugees-fcr/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T767
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T767 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T767, 'click', function() {
ib_T767.open(map,marker_T767);
});

// end info window - T767 //

// marker - T610 //

var marker_T610 = new google.maps.Marker({
map: map,
draggable: false,
position: T610,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T610 = document.createElement("div");
boxText_T610.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T610.innerHTML = '<div style="padding: 20px;"><h1>Austria - Traiskirchen</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">The Oasis aims to be an international team partnering with churches, both locally and globally, to walk alongside refugees, offering them the living water of Jesus Christ and moving with them toward an intimate relationship with Him and His people. We focus on evangelism and discipleship, clothing distribution, teaching German, hospitality and visitaion, friendship evangelism, practical helps, filling out forms, accompanying to doctors, translation, help when moving, etc., coffee house ministry, computer cafe, kids, women, and teen outreach, cleaning and maintenance of the Oasis building, office administration and finances, and emergency short-term housing for refugees (1-3 days)</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/austria-traiskirchen/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T610
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T610 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T610, 'click', function() {
ib_T610.open(map,marker_T610);
});

// end info window - T610 //

// marker - T613 //

var marker_T613 = new google.maps.Marker({
map: map,
draggable: false,
position: T613,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T613 = document.createElement("div");
boxText_T613.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T613.innerHTML = '<div style="padding: 20px;"><h1>Bolivia - Cochabamba (The Center)</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">We reach the economically disadvantaged with after-school educational opportunities, recreation and spiritual programs with the goal of demonstrating personal respect and helping people understand they are important to God. We desire to see authentic Bolivian disciples formed who are capable of forming other disciples. Children and youth after school programs provide tutoring, recreation and spiritual guidance for the economically disadvantaged. We have a weekly children&#39;s program.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/bolivia-cochabamba-the-center/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T613
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T613 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T613, 'click', function() {
ib_T613.open(map,marker_T613);
});

// end info window - T613 //

// marker - T971 //

var marker_T971 = new google.maps.Marker({
map: map,
draggable: false,
position: T971,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T971 = document.createElement("div");
boxText_T971.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T971.innerHTML = '<div style="padding: 20px;"><h1>Brazil - Belo Horizonte</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">We strive to be a place of refuge for those facing the challenges of bringing forth a new life and for those who carried out the desperate decision of terminating their baby&#39;s life. Brazil4Life establishes crisis pregnancy centers in Brazil and will expand into other countries as strategically needed to start crisis pregnancy centers there. Our centers&#39; volunteers and staff train young people to bring the message of abstinence before marriage into schools and before youth groups. Each Brazil4Life crisis pregnancy center has a board of directors, a team of committed volunteers and a director who receives training to offer loving care and needed attention to women facing a crisis in their pregnancy. The mission of Brazil4Life is to proclaim the sanctity of human life. We proclaim with love and compassion the word of God and minister to women facing an unwanted pregnancy. We believe that every life&mdash;born and unborn&mdash;is precious. Our efforts assist those women (and often the fathers) in under-served communities, giving them a chance to choose life&mdash;and not an abrupt end of life&mdash;for their baby. Brazil4Life gives hope to women facing a crisis pregnancy and provides practical ways to help local churches establish crisis pregnancy centers.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/brazil-belo-horizonte/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T971
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T971 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T971, 'click', function() {
ib_T971.open(map,marker_T971);
});

// end info window - T971 //

// marker - T974 //

var marker_T974 = new google.maps.Marker({
map: map,
draggable: false,
position: T974,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T974 = document.createElement("div");
boxText_T974.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T974.innerHTML = '<div style="padding: 20px;"><h1>Austria - Linz</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">Description pending...</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/austria-linz/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T974
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T974 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T974, 'click', function() {
ib_T974.open(map,marker_T974);
});

// end info window - T974 //

// marker - T858 //

var marker_T858 = new google.maps.Marker({
map: map,
draggable: false,
position: T858,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T858 = document.createElement("div");
boxText_T858.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T858.innerHTML = '<div style="padding: 20px;"><h1>Bulgaria - Roma Outreach</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">We reach out to  the poorest of the poor in Bulgaria &mdash; the Roma, also known as Gypsies.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/bulgaria-roma-outreach/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T858
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T858 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T858, 'click', function() {
ib_T858.open(map,marker_T858);
});

// end info window - T858 //

// marker - T868 //

var marker_T868 = new google.maps.Marker({
map: map,
draggable: false,
position: T868,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T868 = document.createElement("div");
boxText_T868.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T868.innerHTML = '<div style="padding: 20px;"><h1>Ecuador - Guayaquil</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">Description pending...</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/ecuador-guayaquil/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T868
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T868 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T868, 'click', function() {
ib_T868.open(map,marker_T868);
});

// end info window - T868 //

// marker - T616 //

var marker_T616 = new google.maps.Marker({
map: map,
draggable: false,
position: T616,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T616 = document.createElement("div");
boxText_T616.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T616.innerHTML = '<div style="padding: 20px;"><h1>Bulgaria - Stara Zagora</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">We want to see the church in Bulgaria engaged locally in its responsibilities and duty to society as a whole. We are involved in family and marriage enrichment, small group leadership, and outreach to Gypsy children. We work very closely with a local church and its leadership.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/bulgaria-stara-zagora/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T616
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T616 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T616, 'click', function() {
ib_T616.open(map,marker_T616);
});

// end info window - T616 //

// marker - T112 //

var marker_T112 = new google.maps.Marker({
map: map,
draggable: false,
position: T112,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T112 = document.createElement("div");
boxText_T112.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T112.innerHTML = '<div style="padding: 20px;"><h1>Cambodia - Food for the Hungry</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">FH Cambodia has about 100 staff working in an integrated community transformation program across 53 rural partner communities in northwestern Cambodia. We work with ITeams personnel in Cambodia on issues related to language acquisition and culture learning, Cambodian society and culture, leadership support and development, organizational development (including NGO registration), adult education and training, and holistic community development. FH Cambodia walks with communities by empowering community leaders to serve the poor through village development plans, facilitating community members in learning Biblical truth, and developing partnerships committed to overcoming all forms of poverty.  Our vision is to see the whole community overcoming all forms of poverty as churches, leaders, and families serve together effectively to help the poor fulfil their God-given potential and to develop the next generation of leaders.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/cambodia-food-for-the-hungry-2/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T112
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T112 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T112, 'click', function() {
ib_T112.open(map,marker_T112);
});

// end info window - T112 //

// marker - T120 //

var marker_T120 = new google.maps.Marker({
map: map,
draggable: false,
position: T120,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T120 = document.createElement("div");
boxText_T120.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T120.innerHTML = '<div style="padding: 20px;"><h1>Cambodia - Heart of Hope</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">The communities that we&#39;re working with are poor. They live along the Tonle Sap River. Many of the families live on floating houseboats. Some of them have small houses on the riverbank. For income most of the families rely on fishing, construction work, and/or collecting recyclable materials. Most of the families are Vietnamese (VN) and some are Khmer. About 80%-90% of adults in the community have not been able to get an education. Families must struggle with social issues such as alcoholism, gambling, and violence at home. Older children often don&#39;t go to school but have been sent to work 8+ hours per day in coffee shops, factories and/or construction sites. The children of these communities are also vulnerable to sexual exploitation. Our hearts have been touched deeply and this is why Heart of Hope was created&mdash;to reach out to at-risk children and adults. We work to help them get out of these destructive cycles by educating them and introducing them to the love of Jesus.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://iteams.us/wws"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T120
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T120 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T120, 'click', function() {
ib_T120.open(map,marker_T120);
});

// end info window - T120 //

// marker - T624 //

var marker_T624 = new google.maps.Marker({
map: map,
draggable: false,
position: T624,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T624 = document.createElement("div");
boxText_T624.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T624.innerHTML = '<div style="padding: 20px;"><h1>Colombia - Medellin</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">Our vision is to empower the youth of our community to reach out to their own generation with the love and power of Jesus. We emphasize bringing youth to Jesus out of a culture heavily affected by gangs, drugs, and the mafia using a fast-growing local ministry as the basis to train leaders in other churches in Medellin and elswhere in Latin America. We use a cell group discipleship ministry model with a strong personal evangelism focus.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/colombia-medellin/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T624
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T624 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T624, 'click', function() {
ib_T624.open(map,marker_T624);
});

// end info window - T624 //

// marker - T625 //

var marker_T625 = new google.maps.Marker({
map: map,
draggable: false,
position: T625,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T625 = document.createElement("div");
boxText_T625.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T625.innerHTML = '<div style="padding: 20px;"><h1>Costa Rica - Sonlife</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">We help the Latin American church establish a well-balanced discipling youth ministry based on Sonlife principles. We establish new youth groups in churches throughout Costa Rica and Latin America. We host short-term trips to other Latin American countries as well as North America, and host North American youth groups. SEMP Conferences (Students Equipped to Minister to Peers) are designed to equip high school students in apologetics and evangelism so they can reach their peers.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/costa-rica-sonlife/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T625
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T625 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T625, 'click', function() {
ib_T625.open(map,marker_T625);
});

// end info window - T625 //

// marker - T839 //

var marker_T839 = new google.maps.Marker({
map: map,
draggable: false,
position: T839,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T839 = document.createElement("div");
boxText_T839.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T839.innerHTML = '<div style="padding: 20px;"><h1>International Teams Costa Rica</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">We are a generation of Latinos who follow Jesus and see ourselves as disciples who make  disciples of Jesus in order to impact lives and communities, within and outside  their local context.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/costa-ricait/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T839
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T839 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T839, 'click', function() {
ib_T839.open(map,marker_T839);
});

// end info window - T839 //

// marker - T628 //

var marker_T628 = new google.maps.Marker({
map: map,
draggable: false,
position: T628,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T628 = document.createElement("div");
boxText_T628.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T628.innerHTML = '<div style="padding: 20px;"><h1>Ecuador - Quito (Youth World)</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">Youth World has 6 key areas of focus &mdash; La Red Juvenil empowers leaders to develop an effective and relational Youth Ministry. We do conferences, training events and professional training certification, coaching and mentoring and provide resources to leaders. International Student Ministry (ISM) is multicultural youth ministry that engages in relationships with international students so they embrace Christ, seek to serve others and build commumity wherever they go. This is a blend of discipleship, programming and leadership training. Short-Term ministries exist to facilitate biblically based transformational experiences in collaboration with existing ministries in Ecuador. We do this through exposure and ministry teams, work teams, internships and a Semester Abroad program for university students from the USA. La Roca Skate Ministry evangelizes, disciples and invests in Latin America youth, equipping them to become Godly leaders within their home, family, church and society. El Refugio is a ministry in a 320 acre training and retreat setting (30 minutes from Quito) which facilitates a deeper relationship with Jesus through nature and outdoor adventure. Casa Gabriel is a residential home for former street boys living in Quito.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/ecuador-quito-youth-world/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T628
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T628 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T628, 'click', function() {
ib_T628.open(map,marker_T628);
});

// end info window - T628 //

// marker - T634 //

var marker_T634 = new google.maps.Marker({
map: map,
draggable: false,
position: T634,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T634 = document.createElement("div");
boxText_T634.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T634.innerHTML = '<div style="padding: 20px;"><h1>France - Champfleuri</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">Our vision is to see lives and communities transformed by the power of God. We accomplish this by assisting local churches both in France and in Europe through solid Bible teaching, counseling, physical tuning, and by providing a venue for non-threatening compassionate evangelism. Christian Camp Ministry. Church retreats, Kids camps, Youth camps, Adult and Family camps. 5-month Bible School program in French.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/france-champfleuri/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T634
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T634 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T634, 'click', function() {
ib_T634.open(map,marker_T634);
});

// end info window - T634 //

// marker - T637 //

var marker_T637 = new google.maps.Marker({
map: map,
draggable: false,
position: T637,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T637 = document.createElement("div");
boxText_T637.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T637.innerHTML = '<div style="padding: 20px;"><h1>France - Lyon</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">Our team encourages and equips French followers of Jesus to evangelize their country and effectively assist in the transformation of Lyon. We work with the Eglise Protestante Evangelique de Villeurbanne Cusset (EPEV-C), member of the Grace Brethern Union of Churches.  Our role includes discipling, leadership development, church planting and training worship leaders. We are regularly involved in leading worship in the local church, and focus on developing leaders in different areas. We meet with individuals for growth and discipleship, as well as regular times with church leaders to pray and discuss direction and new ideas. At the same time, we are developing community in various ways, and desire to see a group of Jesus followers develop an interest in being part of a new church within the next few years.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/france-lyon/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T637
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T637 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T637, 'click', function() {
ib_T637.open(map,marker_T637);
});

// end info window - T637 //

// marker - T733 //

var marker_T733 = new google.maps.Marker({
map: map,
draggable: false,
position: T733,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T733 = document.createElement("div");
boxText_T733.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T733.innerHTML = '<div style="padding: 20px;"><h1>Italy - Rome</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">Thousands of people seeking safety and hope find themselves in Rome during their journey. Most of these refugees - coming from Africa, Asia and the Middle East - are trying to transit through Italy and make their way into countries with broader social services. Some of them are successful, but most are not and find themselves in Rome to await documentation while dealing with the challenges of being unwelcome stranieri in Italy. Some attributes are common to every refugee we have met along the highway - the loss of dignity, the loneliness and hardship of leaving home and family in a far away country, fear and uncertainty in their own lives and in the eyes of people they encounter along the way, and an overarching spiritual journey that often parallels the physical. These shared traits help inform the work we do and the direction our team will grow. Learning a name is often more important than handing out a box meal - listening to a story of loss and pain may bring more healing than an aspirin or a bandage applied in a dark parking lot. We expect life-giving activities like these to happen most often in a one-to-one context - therefore we strongly affirm the International Teams core value of People.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/italy-rome/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T733
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T733 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T733, 'click', function() {
ib_T733.open(map,marker_T733);
});

// end info window - T733 //


// marker - T737 //

var marker_T737 = new google.maps.Marker({
map: map,
draggable: false,
position: T737,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T737 = document.createElement("div");
boxText_T737.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T737.innerHTML = '<div style="padding: 20px;"><h1>France - Paris (Reunion Pere Lachaise)</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">We want to see the P&egrave&#59;re Lachaise / R&eacute&#59;union community (in the 20th district of eastern Paris) transformed by the power of God as we proactively serve as Jesus&apos; hands, feet, and voice in friendships, schools, clubs, associations, and other networks the Spirit opens to us. In July 2000, the Lord led us to an apartment on the east side of Paris in a neighborhood called &quot&#59;P&egrave&#59;re Lachaise / R&eacute&#59;union.&quot&#59;  Through living missionally, we&apos;ve developed many strong relationships here, even though our ministry focus was on other projects like youth ministry, art ministry, and helping two French churches develop. In fall of 2012, Al was asked to consider developing a community-based ministry in Paris as part of the ITeams 2020 Vision. In spring 2013, the target community was identified as our neighborhood. The 2020 Project for our neighborhood is still in its early stages. As of November 2013, we are connecting &amp&#59; developing a plan through the following ways&#58; --Historical research about the neighborhood --Learning about spiritual conflict and related issues --Prayer-walking the neighborhood --Living &amp&#59; raising 4 children in the neighborhood --Al was elected to the parents council of our daughters&apos; elementary school for this year. This is allowing us to build relationships with students, parents, teachers, staff &amp&#59; other community leaders with a heart for the school. --Nicole is teaching three weekly English clubs in our home. This is allowing us to show hospitality, as well as get to know the students &amp&#59; their families. --Involvement in several Paris churches, as well as several parachurch ministries involved with youth outreach and the arts. --Giving &amp&#59; receiving hospitality in our home &amp&#59; other places through birthday parties, Thanksgiving, Christmas cookie baking, Easter egg coloring, etc. --Receiving training through ITeams on leadership and community development. --Participating in some city wide &amp&#59; regional events &amp&#59; colloquiums on themes like outreach to Parisiens. This year, we hope to coordinate a four week study on the life &amp&#59; claims of Jesus as an introduction to neighbors who want to learn more.  We also want to connect with the schools and seek what projects might bring transformation among children &amp&#59; families in the neighborhood. As these projects get clearer, we&#39;ll be able to better envision the type of team &amp&#59; team members who might best serve here.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/france-paris-reunion-pere-lachaise/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T737
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T737 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T737, 'click', function() {
ib_T737.open(map,marker_T737);
});

// end info window - T737 //

// marker - T640 //

var marker_T640 = new google.maps.Marker({
map: map,
draggable: false,
position: T640,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T640 = document.createElement("div");
boxText_T640.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T640.innerHTML = '<div style="padding: 20px;"><h1>France - Paris (The Village)</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">We desire to see a community of disciples, from inside and outside the church, walking powerfully and lovingly with children and young people who risk being left behind by families and institutions. We are developing a community of Parisiens dedicated to helping children and young people at risk of being marginalized from society. This community allows people to belong based on their common desire to help the children, and thus provides an opportunity for some who might never come into a church to experience the love and power of the Gospel in action.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/france-paris-the-village/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T640
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T640 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T640, 'click', function() {
ib_T640.open(map,marker_T640);
});

// end info window - T640 //

// marker - T984 //

var marker_T984 = new google.maps.Marker({
map: map,
draggable: false,
position: T984,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T984 = document.createElement("div");
boxText_T984.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T984.innerHTML = '<div style="padding: 20px;"><h1>France - University of Grenoble</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">Convinced that there is no true SEEING apart from the light of God revealed in the Lord Jesus Christ, we exist to bring light to the eyes of spiritually blind students, both French and foreign, at the University of Grenoble. Our work is primarily based in a student center located on the edge of the university campus where we combine proclamation of the gospel message with practical acts of service and compassion within the framework of a powerful community experience. The student center known as the FEU (Foyer &eacute;vang&eacute;lique universitaire . . . or evangelical student center) welcomes scores of university students each week.  Christian students invite friends to discover first the center through events such as game nights and theme nights, weekend getaways, French and English groups, concerts and ethnic gatherings, and second, the Christian faith through Bible studies, discovery groups, prayer meetings (yes, non-christians sometimes come to prayer meetings!), one-on-one Bible-reading relationships, and bridge events into the local churches with whom we partner. Our bi-monthly food distribution draws students from all over the world who are struggling to make ends meet as they pursue their studies at the university. Our Chinese group provides a place of welcome and friendship for a segment of the student population that tends to struggle with integration in the French university environment. Our short-term summer trips expose our students to the global work of the gospel and to the diverse ways in which Jesus is rescuing and drawing people and families and communities to Himself in Christ around the world.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/france-university-of-grenoble/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T984
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T984 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T984, 'click', function() {
ib_T984.open(map,marker_T984);
});

// end info window - T984 //

// marker - T642 //

var marker_T642 = new google.maps.Marker({
map: map,
draggable: false,
position: T642,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T642 = document.createElement("div");
boxText_T642.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T642.innerHTML = '<div style="padding: 20px;"><h1>Greece - Athens</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">We seek to plant gospel SEEDS in the lives of refugees across Greece that take ROOT and bear the FRUIT of life transformation in Jesus Christ. Revealing Jesus to refugees by demonstrating and proclaiming the gospel across Greece. Tea House - welcoming refugees and sharing a cup of tea. Food distribution - sit down meals and grocery packs. Language Classes - English and modern Greek. Hygiene Ministry - showers and limited laundry services. Evangelism and discipleship - outreaches, classes, and retreats. Clothing distribution and give-away events. Children&apos;s Ministry - weekly program, camps, and special events. Networking and referrals - guiding refugees through the maze of offices and paperwork.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/greece-athens/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T642
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T642 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T642, 'click', function() {
ib_T642.open(map,marker_T642);
});

// end info window - T642 //

// marker - T978 //

var marker_T978 = new google.maps.Marker({
map: map,
draggable: false,
position: T978,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T978 = document.createElement("div");
boxText_T978.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T978.innerHTML = '<div style="padding: 20px;"><h1>Greece - Athens Koukaki</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">To assist the local church serving the needs of the community planting gospel seeds that take root and bear fruit of a life transformed through Jesus. We partner and work under the B&apos; Evangelical Church of Athens. Second Evangelical Church of Athens is located very close to the center of Athens and under the Philopappos Hill and the Acropolis. Refugees that were forced to abandon their homes in Asia Minor after the Greek-Turkish War and subsequent Greek and Armenian genocides founded the Church in 1924. These refugees were members of three main Greek Evangelical Churches that were established in the Smyrna area and in Cappadocia. Since 1924, the Second Evangelical Church has served the local community and the overall evangelical ministry in Greece in various ways. Today the Church community consists of about 140 people, about 34 of which are of no Greek descent (17 are not English speaking). The neighborhood&#58;In the early nineties a big flow of immigrants from Albania came to Greece settling in the Koukaki neighborhood. There are many other immigrants from various Balkan countries, as well as Middle East countries. A lot of them are from Egypt, Syria, Iran and Afghanistan. Our Church is located at a place that could be characterized as &ldquo&#59;inner city&rdquo&#59;. There are several sex shops and strip clubs, as well as two gay bars in the neighborhood. After midnight it&rsquo&#59;s like another normal day in Sodom and Gomorra. There is transvestite bar and street prostitution just two blocks away. Serving the oppressed - the poor, the needy, the stranger and the refugee&#58;Since 2004, Second Evangelical Church has developed a rather extensive and in depth outreach program for the neighborhood. Teen&rsquo&#59;s games&#58; We organize these games at the local playground and basketball field. They are very successful&#59; about 90 children attended last year. Because of the success of this program, the church opened up a youth ministry center. Youth Community Center - Just a few blocks away from the church every week 35-40 children, mostly from immigrant and refugee families come to the center for an evening of fun games and a Bible study. Some of youth come to Sunday school, church camps, etc. Ministry&rsquo&#59;s offered at the center include after school tutoring, English, French, Math, etc. Some of the Middle-eastern families of the neighborhood do not allow children to come to church, yet they allow them to attend our Center&rsquo&#59;s activities. Feeding Ministry&#58;From the courtyard of the church we serve 130 hot meals two days a week. People from the community come for the food, but it also opens up the opportunity to come in contact with the love of Christ. Members from the church, as well as from the neighborhood (individuals and businesses) assist regularly in this. Several times the Church has organized large giveaways partnering with ministries such &ldquo&#59;Helping Hands&rdquo&#59; and &ldquo&#59;Share the Blessing&rdquo&#59;. Symparastasi&#58;This means &ldquo&#59;standing with.&rdquo&#59; The needs of our community are huge and we want to offer more services that can&apos;t be done from the churchyard. We rented a space a block away that we use to offer showers, clothing, laundry facility, haircuts, gender and ethnic focused events. One floor is dedicated to learning. We offer a small library with books in different languages, computer classes, Bible classes, English and Greek classes and a quiet place where people could come to read. We also demonstrate community outreach ministries to other local churches and will provide additional support and guidance to those churches as they embark on local community transformation - a current example of this is a feeding program with Piraeus Church.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/greece-athens-koukaki/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T978
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T978 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T978, 'click', function() {
ib_T978.open(map,marker_T978);
});

// end info window - T978 //

// marker - T644 //

var marker_T644 = new google.maps.Marker({
map: map,
draggable: false,
position: T644,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T644 = document.createElement("div");
boxText_T644.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T644.innerHTML = '<div style="padding: 20px;"><h1>Honduras</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">We reflect and share about Jesus, disciple and equip people in the love and grace of Jesus to set them free to be the people God made them to be. Partnering with churches and ministries in the evangelism and discipleship of women and young people to set them free to love and be loved by the Lover of their souls. Focusing on Christ and the cross to heal past wounds and bring transformation.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/honduras/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T644
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T644 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T644, 'click', function() {
ib_T644.open(map,marker_T644);
});

// end info window - T644 //

// marker - T848 //

var marker_T848 = new google.maps.Marker({
map: map,
draggable: false,
position: T848,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T848 = document.createElement("div");
boxText_T848.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T848.innerHTML = '<div style="padding: 20px;"><h1>Malawi - Lilongwe</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">There is Hope Ministries works to see refugees, asylum seekers and internally displaced people rise above their problems by utilizing their potential to make the best out of their situation for themselves and their communities, and to see them become effective witnesses of Jesus in the world. There is Hope seeks to work with the refugee community in Malawi, to see refugees, asylum seekers and vulnerable people rise above difficult circumstances by fully utilising their potential to self-sufficiency and to making a positive contribution to society. ITeams works alongside There is Hope for the joint objective to see lives and communities transformed by the power of God.  We see this happening through partnership with both organizations being stake-holders. ITeams brings staff, funding and a global network, while There is Hope brings on-ground leadership, direction and local support.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/malawi-lilongwe/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T848
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T848 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T848, 'click', function() {
ib_T848.open(map,marker_T848);
});

// end info window - T848 //

// marker - T658 //

var marker_T658 = new google.maps.Marker({
map: map,
draggable: false,
position: T658,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T658 = document.createElement("div");
boxText_T658.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T658.innerHTML = '<div style="padding: 20px;"><h1>Mexico - Tenancingo</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">We helped establish a church almost seven years ago where now over 150 are in attendance. Extension cell groups in Ixtapan and Tonitico. Starting new churches in the unreached areas of Mexico. Equipping national believers to establish new churches in other areas of the world through specialized training. Hosting short term teams throughout the year and La Campana, which is a 2-week campaign held every summer. Coffeehouse ministry designed to build relationships with people in the community and share the gospel. Children&apos;s neighborhood Bible study/outreach.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/mexico-tenancingo/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T658
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T658 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T658, 'click', function() {
ib_T658.open(map,marker_T658);
});

// end info window - T658 //

// marker - T111 //

var marker_T111 = new google.maps.Marker({
map: map,
draggable: false,
position: T111,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T111 = document.createElement("div");
boxText_T111.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T111.innerHTML = '<div style="padding: 20px;"><h1>Nepal - North West</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">We want to see lives in our village transformed by God&rsquo&#59;s power that lead to an entire village community being transformed. Our goal is community-wide, deep-rooted Kingdom transformation. In 15 years, we want trekkers to trot up the mountain and get in conversations with young people in the village wherein they tell stories of how things used to be... but then their father encountered Jesus.  A team of people came alongside the villagers, and people began working together to see a better society. Schools changed. Racism changed. Medical care changed. Hearts changed. When you zoom out in 15 years, all in this village as well as many neighboring villages have access to food, freedom, and forgiveness. No one is invisible and Jesus is King. Our village is one of the most neglected in the entire country, having only two outsiders ever live there in the last 50 years. We are a 5-hour walk up the trail from the nearest drivable road. When a person speaks of Jesus, villagers often think he is a place or neighboring village. People have had little access to food and even less access to freedom and forgiveness. This is why we live in community, demonstrating a society where Jesus is King. In recent months the team has identified a village in the Northwest and has moved into an annex of a village leaders home. We are farming along with all the other villagers and attempting to show the broader society what it looks like to live in a community under the reign of Jesus...  We live simply in a remote place, cooking over an open fire, learning from our new friends and teaching new things as they arise. Strong emphasis is given on Gospel story-telling combined with living amongst our neighbors in a very close-knit village community.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/nepal-north-west/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T111
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T111 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T111, 'click', function() {
ib_T111.open(map,marker_T111);
});

// end info window - T111 //

// marker - T991 //

var marker_T991 = new google.maps.Marker({
map: map,
draggable: false,
position: T991,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T991 = document.createElement("div");
boxText_T991.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T991.innerHTML = '<div style="padding: 20px;"><h1>Nicaragua - Masatepe</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">Our vision is to see lives and the community transformed by the power of God here in Masatepe.  Masatepe is a new location for International Teams as of 2013. We are a 2020 community, which means that our focus is on integrated community transformation (ICT), which is an approach that compels us to see each person in a community through the eyes of Jesus. Our 2020 Vision is to be a community where no one is invisible and everyone has access to food, freedom, and forgiveness.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/nicaragua-masatepe/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T991
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T991 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T991, 'click', function() {
ib_T991.open(map,marker_T991);
});

// end info window - T991 //

// marker - T998 //

var marker_T998 = new google.maps.Marker({
map: map,
draggable: false,
position: T998,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T998 = document.createElement("div");
boxText_T998.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T998.innerHTML = '<div style="padding: 20px;"><h1>Uganda - Soroti Town</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">Currently, we work with local churches, para-church ministries, schools, and individuals. Our strengths are in Childrens Ministry training, small business training, purity training in local schools, and organisational development.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/uganda-soroti-town/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T998
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T998 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T998, 'click', function() {
ib_T998.open(map,marker_T998);
});

// end info window - T998 //

// marker - T835 //

var marker_T835 = new google.maps.Marker({
map: map,
draggable: false,
position: T835,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T835 = document.createElement("div");
boxText_T835.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T835.innerHTML = '<div style="padding: 20px;"><h1>Romania - Cluj (RHP)</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">We are committed to seeing lives and communities transformed by the power of God. Using her spiritual gifts of mercy, discernment and administration along with her audiology skills, Dr Tricia Towle gets the privilege of being Christ-incarnate, offering comfort and Christ-like care advocating for the retired poor who could not otherwise afford hearing aids to hear better through low-cost, good quality hearing aids. She also gets to advocate for families of hearing-impaired children to get the best possible hearing healthcare, sometimes through cochlear implantation, within the Romanian health system.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/romania-cluj-rhp/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T835
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T835 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T835, 'click', function() {
ib_T835.open(map,marker_T835);
});

// end info window - T835 //

// marker - T836 //

var marker_T836 = new google.maps.Marker({
map: map,
draggable: false,
position: T836,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T836 = document.createElement("div");
boxText_T836.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T836.innerHTML = '<div style="padding: 20px;"><h1>Romania - Valcea</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">We desire to glorify God through raising disciples among the Romanian children/youth by developing quality programs. Our small team recently moved to this location, and  are looking forward to building a team to share in the many opportunities found in Ramnicu Valcea focusing on children and youth. With less than a 50% graduation rate in high school alone, we want to focus on education as a way to better the lives of Romanians. English is in high demand both in school and in the workplace. Every student will place higher in their academic testing knowing a second language. And every application includes the question, &ldquo&#59;Do you know English?&rdquo&#59; With this in mind, we have implemented an English as a second language program to reach out to the Romanian children, youth and young adults of our community. Through the ESL program it is our desire to show the love of Christ to these people who are struggling to stay in school, excel in their work, or to even make it easier to find a job. But the demand is much greater than we anticipated. We started small with 5 small groups meeting once a week. We haven&rsquo&#59;t had to promote our ESL program, simply through word of mouth we have many more people who want to participate. We need help! If you have experience in teaching English as a second language and a heart to serve we would love to talk with you. Our vision isn&rsquo&#59;t limited strictly to English, we want to invest in education more broadly.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/romania-valcea/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T836
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T836 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T836, 'click', function() {
ib_T836.open(map,marker_T836);
});

// end info window - T836 //

// marker - T755 //

var marker_T755 = new google.maps.Marker({
map: map,
draggable: false,
position: T755,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T755 = document.createElement("div");
boxText_T755.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T755.innerHTML = '<div style="padding: 20px;"><h1>Rwanda</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">Our purpose is to be an agent of God&apos;s love and reconciliation in the church and in the community. Providing food, clothing and love to street children and refugees&#59; serving in the local church&#59; teaching on reconciliation to church leaders</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/rwanda/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T755
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T755 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T755, 'click', function() {
ib_T755.open(map,marker_T755);
});

// end info window - T755 //

// marker - T830 //

var marker_T830 = new google.maps.Marker({
map: map,
draggable: false,
position: T830,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T830 = document.createElement("div");
boxText_T830.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T830.innerHTML = '<div style="padding: 20px;"><h1>Spain - Santiago de Compostela</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">We are establishing <a style="color: yellow" href="http://pilgrimhousesantiago.com" target="_blank">Pilgrim House Welcome Center</a> and hostel where pilgrims can come in, tell us their stories, have their practical needs met, and hear about Jesus&apos; love, goodness, and forgiveness. As pilgrims wind their way through Spain while walking or biking on the Camino de Santiago, they reflect on their lives and seek answers to long-held and profound questions. They may ask, &ldquo&#59;Who is  God?&rdquo&#59; and &ldquo&#59;What&rsquo&#59;s the purpose of my life?&rdquo&#59; The Camino de Santiago consists of many different pilgrimage trails that start in different towns in Europe and arrive in Santiago de  Compostela, Spain. Most pilgrims walk between 5 and 35 days to reach  Santiago. The reasons pilgrims walk are as diverse as the pilgrims themselves, yet there is a common theme&#58; about 95% of pilgrims report walking the Camino for spiritual reasons. They&rsquo&#59;re at a unique place of reflection and searching. The Camino can also be very social. The Camino brings together travelers of all ages, nationalities, and worldviews. Pilgrims have conversations on the Camino they might find difficult to have in any other context. Our team is here in Santiago de Compostela, the destination of the Camino. Through the Pilgrim House ministry, we want to provide pilgrims with time and space to debrief their journey, gather together, and connect with God. The  opportunity is great to serve them in practical ways as well as invite them to consider placing their trust in Jesus. Phase 1 of Pilgrim House will be a cozy Welcome Center. Phase 2 will be a hostel. Both the Welcome Center and hostel will be places of welcome, peace, solitude, community, conversation, art, resources, and prayer. Thus, we envision Pilgrim House as a place that is synonymous with the Camino and the city of Santiago, in that it will encourage each traveler in his or her soul&rsquo&#59;s Camino. Pilgrim House will be a place where pilgrims can go &ldquo&#59;deeper and higher, onward and upward.&rdquo&#59;</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/spain-santiago-de-compostela/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T830
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T830 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T830, 'click', function() {
ib_T830.open(map,marker_T830);
});

// end info window - T830 //

// marker - T936 //

var marker_T936 = new google.maps.Marker({
map: map,
draggable: false,
position: T936,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T936 = document.createElement("div");
boxText_T936.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T936.innerHTML = '<div style="padding: 20px;"><h1>India - South India Village</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">We are working with local ministry leaders and other leaders in the community to facilitate transformation in the village that we are involved with. One aspect of this is to improve the education available to children and to make that education accessible to the poorest of the poor. Another aspect is with a business that has been started that employs at-risk women and returns profits back to education scholarships. Our desire is for the people of the village to see that true property is not financial, but is a life with hope in Jesus. We are blessed to be working with a local NGO and a financial partner in the US.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/india-south-india-village/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T936
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T936 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T936, 'click', function() {
ib_T936.open(map,marker_T936);
});

// end info window - T936 //

// marker - T937 //

var marker_T937 = new google.maps.Marker({
map: map,
draggable: false,
position: T937,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T937 = document.createElement("div");
boxText_T937.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T937.innerHTML = '<div style="padding: 20px;"><h1>Thailand - Isaan</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">To bring the transforming hope and truth of Christ to those who are spiritually and physically oppressed, living in the Northeastern region of Thailand and beyond. This is a pioneer team so at the moment we are in the process of building this ministry and laying a strong foundation. The overall focus of this ministry is to lead people from all walks of life into a loving relationship with Christ. There are different avenues in which we will work, but all will have Christ at the core and will minister to the spiritual and physical needs of the people. Our ministry will include, but is certainly not limited to&#58;relational ministry, church and leadership development, childrens ministry and outreach, human trafficking ministry focused on at risk children, vulnerable families, unreached communities, traffickers/oppressors, etc.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/thailand-isaan/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T937
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T937 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T937, 'click', function() {
ib_T937.open(map,marker_T937);
});

// end info window - T937 //

// marker - T100 //

var marker_T100 = new google.maps.Marker({
map: map,
draggable: false,
position: T100,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T100 = document.createElement("div");
boxText_T100.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T100.innerHTML = '<div style="padding: 20px;"><h1>Uganda - Karamoja</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">Here are some recent snapshots of our work and opportunities... <br /><br />THE CHURCH &mdash; A small church was recently begun in Lomorucubai, but discipleship is lacking. Believers have minimal understanding of what it means to follow Jesus, what the Bible is about, or how to live out their faith. Few believers are literate. <br /><br />HEALTH-CARE &mdash; Our focus is to train VHTs (Village Health Trainers) so they can meet basic health-care needs in the community. Our desire is to one day start a health clinic in Lomorucubai.<br /><br />VETERINARY MEDICINE &mdash; Cows are highly valued among the Karamojong people. Veterinary medicine is used as a way to build trust within the community and to meet needs near to the hearts of people.<br /><br />AGRICULTURAL &mdash; As people transition from nomadic to pastoralists, they need to be trained in agricultural practices and helped with tools and supplies. We are trying to meet some of those needs. Our desire is to have the community be self-sustaining so people can feed their own families without being dependent on outside sources such as the UN World Food Program.<br /><br />EDUCATION &mdash; Currently nothing is being done in Lomorucubai in the area of education. However, it is our desire to begin a primary school in the village. The nearest school is 6 miles away so few village children are educated.<br /><br />COMMUNITY TRANSFORMATION COORDINATOR WITH A FOCUS ON DISCIPLESHIP&#58; (LONG-TERM) Currently little discipleship is happening in Lomorucubai. Discipleship is seen as one of the primary needs that must be met for people to walk with Jesus, break the cycle of violence, and be set free from poverty. Although other needs exist (such as water development, agricultural, educational) we want all of those positions to grow out of discipleship. Therefore, the position that needs to be met now is the CTC / Discipleship Focus. The CTC/Discipleship will disciple local believers, train local church leaders, and coordinate community transformation &ndash&#59; including identifying and developing new positions that need to be filled in the future.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/uganda-karamoja-5/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T100
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T100 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T100, 'click', function() {
ib_T100.open(map,marker_T100);
});

// end info window - T100 //

// marker - T999 //

var marker_T999 = new google.maps.Marker({
map: map,
draggable: false,
position: T999,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T999 = document.createElement("div");
boxText_T999.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T999.innerHTML = '<div style="padding: 20px;"><h1>Uganda - Obulle</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">Our aim is to see the entire community of Obulle transformed by the power of God so that no one is invisible and everyone has access to food, freedom, and forgiveness. <br /><br />A. The Church&#58; Currently, our team is focusing on equipping, encouraging, empowering the local church for effective service in our community and beyond. We want to see the local church helping people walk in truth and freedom in Christ, making passionate disciples who are rooted in the Biblical world-view. A long-term goal is to see the local church send people out into ministry and caring for orphans. One focus of strengthening the church has been to provide Biblical teaching about marriage and family.<br /><br />B. Agriculture&#58; We have introduced partners who are helping community members learn improved methods of agriculture and animal husbandry. These partners are also empowering local people to establish their own water wells within the community.<br /><br />C. Health Care&#58; The clinic in Obulle has no doctor, one nurse, few drugs, and a limited lab. The referral hospital 12 km away is characterized by overcrowding, corruption, and a lack of medicines. We long for the day when a medical facility is available where we can feel confident that quality care will be given.<br /><br />D. Small Business&#58; A few people have received basic training in running a small business, but most people simply survive through subsistence farming. Financial challenges abound as people struggle to provide food, schooling, and medical care for their children. Our desire is for people to be equipped with the knowledge and tools to wisely handle personal finances, as well as small businesses which can supplement their garden&rsquo&#59;s income.<br /><br />E. Education&#58; Nearly every resident of Obulle agrees that education is the area of greatest need. Likewise, the goal of nearly every person is to raise enough money to send their children off to boarding school. Three primary schools operate in Obulle (1 large government school and 2 small private schools begun by local churches). There is no secondary school in Obulle. The goal of our team is to have quality education available in Obulle for both primary and secondary school students.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/uganda-obulle/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T999
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T999 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T999, 'click', function() {
ib_T999.open(map,marker_T999);
});

// end info window - T999 //

// marker - T101 //

var marker_T101 = new google.maps.Marker({
map: map,
draggable: false,
position: T101,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T101 = document.createElement("div");
boxText_T101.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T101.innerHTML = '<div style="padding: 20px;"><h1>Uganda - Pamba</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">We bring people together to help the oppressed. We walk alongside the local church to see lives and communities transformed by the power of God in Pamba. Our goal for our community by the end of 2020 is that no one is invisible and everyone has access to food, freedom and forgiveness. <br /><br />Pamba is a cross between city and village, with farmers and businessmen living side by side in permanent-structure homes and thatched-roof mud huts. It is a community of educational, vocational, developmental, financial, and spiritual opportunity, with numerous schools, a bustling business center, a market that sells local produce, close proximity to the city of Soroti, surrounding village farms, many new building projects and investments, and a number of emerging churches. But amid all these opportunities there is despair. Pamba has several witchdoctors, places where the lost become even more distant from the truth, and is known for its unsavory &apos;video halls,&apos; loud music, and heavy drinking in the area behind the market. From early morning hours to late evening hours both men and women sit around large clay pots drinking from long straws to take their minds off of life. In Pamba, families are broken, promiscuity is rampant, education and health-care are poor, and children and youth wander with little direction. But the hope for Pamba is Jesus and we see it in the growing local church and individuals shining brightly as they go about their daily lives. By engaging Church with Community, true transformation can and will happen here. <br /><br />A. The Church&#58;Pamba is a community without a shortage of churches. We&#39;ve identified 12 churches in the community. Our goal is to connect these churches and to encourage them to walk alongside each other to better the community of Pamba.  We want to see the Church engage with the community so that true transformation will occur. We want to encourage, equip, and engage with the local churches to teach the Biblical worldview. We want to see the community multiply with disciples who will go out and teach more disciples.<br /><br />B. Agriculture &amp&#59; Business&#58;Pamba&#39;s size is between urban and rural. With a market in the city center, many of the vendors buy produce outside and raise the price to make a living here in Pamba. Because the land is so fertile, good agriculture practices need to be taught so people can grow their own produce, cut out the middle person, and make a higher profit margin. <a style="color: yellow" href="http://www.farming-gods-way.org" target="_blank">Farming God&#39;s Way</a> does just that. High yields in small plots produce an increase in income. Small business education is also needed to understand the Biblical worldview of doing business.<br /><br />C. Disability &amp&#59; Special Needs&#58;A local NGO here in Pamba has identified at least 90 children in the Soroti Municipality with disabilities and special needs. Care for these children is almost non-existent. Because the everyday living here is so demanding and difficult, families with these children often struggle to provide. It&#39;s these children who suffer and are the first to be neglected.  Often, these children are invisible and hidden because of shame. Teaching things like the sanctity of life and how to take care of these precious children, is a ministry wanted and needed by the community of Pamba.<br /><br />D. Education &amp&#59; Children&#58;Pamba has many schools&#59; there are twelve schools from nursery to elementary to secondary. Because education is so important to the community, there is plenty of work to be done in Pamba. Finding ways for families to be able to afford sending their children to school is a need. Connecting these families with the church, increasing their businesses, and improving the quality of medical care will contribute to better spending and saving. This will eventually provide opportunity for children to receive an education. Walking alongside these schools and teaching the Biblical worldview will boost the educational system, which will ultimately benefit the children.<br /><br />E. Medical&#58;Pamba has five medical health clinics. With a new hospital on the border of Pamba, and a main hospital in Soroti there are plenty of places to go. However, here in Pamba we are looking to improve healthcare by providing HIV/AIDS awareness, family planning training, and also purity education. We want to walk alongside current health facilities to encourage and equip them to be able to operate with a Biblical worldview. We also want to educate the clinics as well as the community on disease prevention, which will then increase life, deter ineffective treatment, and increase income for other family needs.<br /><br />F. Youth &amp&#59; Sports&#58;With the average age in Uganda being 15 and with 80% of the population being under the age of 30 and 36% of the population under the age of 9, there is no dispute about the number of youth. Youth are not only busy with school and chores but also with sports and attending video halls. There is a need in Pamba to walk alongside the youth. With sports, especially soccer (football), there is an opportunity to build relationships through activities, where we can encourage, equip and engage these young lives. Most youth are lacking mentors to walk alongside them. Structured families are lacking, thus allowing the youth to wander freely and go astray. Education and mentorship is needed in Pamba to guide and direct these youths to live a life with Jesus. Connecting the church with the community and providing opportunity for these youths to grow in the Biblical worldview will better the community&rsquo&#59;&#39;upcoming leaders.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/uganda-pamba/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T101
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T101 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T101, 'click', function() {
ib_T101.open(map,marker_T101);
});

// end info window - T101 //

// marker - T934 //

var marker_T934 = new google.maps.Marker({
map: map,
draggable: false,
position: T934,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T934 = document.createElement("div");
boxText_T934.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T934.innerHTML = '<div style="padding: 20px;"><h1>UK - Old Southall, London</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">We work to equip and empower churches in Southall, west London, to reach their diverse communities, in order to see lives and communities transformed by the power of God. In west London, not far from Heathrow Airport, along the train lines west from central London, lies the neighbourhood of Southall. Southall is known as the &#39;Little India&#39; of London, though this title does not adequately reflect the variety of countries represented by its residents. This diverse and vibrant community is host to a variety of world religions and cultures, as well as many of the social issues typical of poor, urban communities. Since World War II, Southall has been a magnet for immigrants from South Asia. In more recent years, it has become home to refugees and immigrants from farther afield, including Eastern Europe, Central Asia and Africa. These diverse communities have brought their religious traditions with them, making Southall a melting pot of world religions. Southall is home to the largest Sikh temple outside of India, its golden dome towering over St Johns church, located across the road.  Within a 20-minute walk of St Johns Church, there are at least 15 gurdwaras, several mosques, and at least 3 Hindu temples. A walk through Southall is a kaleidescope of colour, from sari and fabric shops of bright colours to shimmering gold in jewellers&#39; windows, surrounded by smells of curry and spices. It is a vibrant community both culturally and spiritually. Wars around the world have led to many unreached people groups coming to Southall as refugees. Thousands of Somalis and Afghans now call Southall home, as they have fled the wars of their home countries. While western workers have a hard time getting into these countries, now these people groups are coming to London, where they live in proximity to Christians often for the first time. Some of the women come to St Johns Church for English classes. For most, this is the first time they have interacted with followers of Jesus. Because of the number of refugees and immigrants, the community statistically is one of the poorest in west London. Homelessness and substandard housing are growing problems, as are economic exploitation and human trafficking. Some people are trafficked into the country as students, co-opted into illegal work and housing, then thrown onto the streets when their employers no longer want the risk of employing illegal workers. Others are trafficked into the country, and forced to live in substandard accommodation while waiting for their asylum claims to be considered by the government. Many are living in hope of a better life, but not sure if they will be granted that opportunity.Not only are world religions well represented, there are healthy, active, vibrant Christian churches in the area, each reaching out to their surrounding area. The diverse and challenging setting of Southall provides a unique opportunity for Christians to be boldly Christian and boldly welcoming in providing services for all in the community, regardless of faith background. In addition to being boldly welcoming, by being unashamedly Christian, we have a chance to demonstrate the gospel in both word and deed to people who have not interacted with the gospel before. <br /><br />Current Ministry&#58;<br />Currently we are partnering with one area church, focused on English language classes for refugee women. These English language classes for refugee and immigrant women provide a springboard for visitation ministry and relationship-building with students. Many of the students are from &#39;unreached&#39; countries like Somalia and Afghanistan, making this work strategic in demonstrating the gospel to those who have never met Christians.  The classes provide not only practical language skills, but a sense of community for women who are often isolated because of domestic responsibilities and cultural expectations. The classes are sometimes their only connection with the wider community, and so help to empower them to engage with British culture at large. Individual relationships with students lead to opportunities to both offer compassion and talk about faith. While the language classes and relationships from it are the main active ministry at the moment, there are many opportunities for further work in Southall, and not only through St Johns.  There are several active, vibrant churches in the area that are doing what they can to reach out the community. Most churches, however, feel overstretched as they try to meet the needs of both their parishioners and the wider community.  There is opportunity to work alongside these churches to enhance current ministry, develop new ministry, and equip the church to do more. <br /><br />Ministry opportunities <br />Further research and networking to discover more local networks and build links with like-minded groups<br />Refugee outreach&#58; both to newly arrived refugees and asylum seekers, and those who are established&#59; <br />Needs for adult literacy and ESOL education, community integration, youth and children&#39;s work<br />Youth work&#58;  both with churched and unchurched youth, including education help, mentoring, teaching, discipleship and culturally-appropriate evangelism. <br />Literacy teaching, for all ages<br />Anti-trafficking work&#58;  helping educate the community about issues of trafficking for prevention, and recognizing victims&#59; <br />work with other outreaches, such as homeless and educational outreach, to identify and help victims of trafficking and slavery<br />Building relationships locally with neighbours through community garden, hospitality and visitation<br />Culturally-focused work with Somalis or with Afghans, possibly including language study and language-specific outreachHomeless outreach and assistance, through local churches and community groups<br />Capacity building in local churches&#58;  teaching and training about theology of mission, cross-cultural communication, outreach to other faith groups, and attitudes to community and mission<br /><br />Team Values&#58;The local church as God&#39;s agent in the community. The witness of God&#39;s kingdom in the community is stronger when the church as an institution is seen as a place of welcome and help for all, no matter what country or faith they come from. We want to do ministry in and through the local church, not separately from it. We want to help the church to reach the community, not just do it for them. Equipping and empowering the church. We want to give church members the skills and confidence to do ministry themselves, by conducting teaching and training events for church members on topics such as cross-cultural communication, working with other faiths, theology of mission, and discipleship. Modeling cross-cultural relationships. For many traditional British churches, the idea of engaging in relationships with people from other cultures or faiths is daunting. We can be role models of how to develop friendships with other cultures in ways that are culturally appropriate. We can be bridge-builders between the church and other cultures. Compassionate justice and compassionate evangelism.  Because of the needs of the community, evangelism cannot be done without attention to the physical needs of the community as well.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/uk-old-southall-london/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T934
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T934 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T934, 'click', function() {
ib_T934.open(map,marker_T934);
});

// end info window - T934 //

// marker - T909 //

var marker_T909 = new google.maps.Marker({
map: map,
draggable: false,
position: T909,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T909 = document.createElement("div");
boxText_T909.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T909.innerHTML = '<div style="padding: 20px;"><h1>UK - Oxford</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">We serve within the context of a local Bible-teaching church to minister to the city of Oxford and surrounding areas. In order to fulfill our three-part goal we engage in numerous activities&#58;1) We serve within the context of the church as it is the love of Christ for whom He laid down His life (Eph 5&#58;25) and is meant to be the heart of all Christian ministry (Eph 4&#58;11-13).  2) We partake in regular evangelism both to the city of Oxford and the Universities.  (Mark 16&#58;15)3) We strengthen the future of the church in the UK through discipleship of the youth and student ministry. (1 Tim 4&#58;12)4) We hold regular Biblically-based Christian ministry/evangelism training courses. (2 Tim 3&#58;16-17)5) We train youth workers to impact the UK wherever they live through creating useful and relevant resources and offering personal and spiritual guidance. (1 Cor 11&#58;1)</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/uk-oxford/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T909
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T909 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T909, 'click', function() {
ib_T909.open(map,marker_T909);
});

// end info window - T909 //

// marker - T684 //

var marker_T684 = new google.maps.Marker({
map: map,
draggable: false,
position: T684,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T684 = document.createElement("div");
boxText_T684.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T684.innerHTML = '<div style="padding: 20px;"><h1>Ukraine - Kyiv (Ruka Dopomogy)</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">To see Ukrainian teenagers&#39; lives changed by the impact of Jesus and become life-changers themselves. Mentor church youth leaders. Coach churches in youth ministry strategy. Provide quality resources for youth ministry.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/ukraine-kyiv-ruka-dopomogy/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T684
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T684 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T684, 'click', function() {
ib_T684.open(map,marker_T684);
});

// end info window - T684 //

// marker - T993 //

var marker_T993 = new google.maps.Marker({
map: map,
draggable: false,
position: T993,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T993 = document.createElement("div");
boxText_T993.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T993.innerHTML = '<div style="padding: 20px;"><h1>Ukraine - Radvanka, Uzghorod</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">We desire to see the community of Radvanka tranformed by the power of God. 1. Initial research completed on needs within Radvanka. 2. Relationships established with city and Roma camp authorities, and with other ministries already at work within Radvanka or similar ministries near Radvanka amongst Roma people. 3. Director of Roma Ministries recruited. 4. Worship leader recruited. 5. To identify and begin work with other orphanages that service the children from Uzhgorod region. 6. Every abandoned baby within Uzhgorod region is being held daily. 7. Ministry Center opened (office, welcome center, bookstore and cafe). 8. Campus ministry fully implemented with a team leading Connections Coffee outreach and campus Bible studies. 9. Jewish cemetery restored.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/ukraine-radvanka-uzghorod/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T993
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T993 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T993, 'click', function() {
ib_T993.open(map,marker_T993);
});

// end info window - T993 //

// marker - T985 //

var marker_T985 = new google.maps.Marker({
map: map,
draggable: false,
position: T985,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T985 = document.createElement("div");
boxText_T985.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T985.innerHTML = '<div style="padding: 20px;"><h1>Ukraine - TMI</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">Mobilization and training to transform lives and communities</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/ukraine-tmi/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T985
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T985 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T985, 'click', function() {
ib_T985.open(map,marker_T985);
});

// end info window - T985 //



// marker - T876 //

var marker_T876 = new google.maps.Marker({
map: map,
draggable: false,
position: T876,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T876 = document.createElement("div");
boxText_T876.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T876.innerHTML = '<div style="padding: 20px;"><h1>USA - Chicago (Little Village)</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">Our aim is to make Christ famous in Little Village and to see His will be done in our neighborhood as it is in heaven. Our ministry works through New Life Community Church and its non profit arm (New Life Centers of Chicagoland) in the Mexican immigrant neighborhood of Little Village on Chicago&apos;s west side.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/usa-chicago-little-village/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T876
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T876 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T876, 'click', function() {
ib_T876.open(map,marker_T876);
});

// end info window - T876 //

// marker - T682 //

var marker_T682 = new google.maps.Marker({
map: map,
draggable: false,
position: T682,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T682 = document.createElement("div");
boxText_T682.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T682.innerHTML = '<div style="padding: 20px;"><h1>USA - Chicago (Near West)</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">Our goal is to see individuals, families and communities transformed by the power of God in the underserved ethnic neighborhoods on Chicago&apos;s west side. Our team works in partnership with ethnic churches in evangelism, discipleship, leadership development, art, and youth ministry while cooperating in the economic, social and educational development of the community. We serve in the African American community of North Lawndale. We work in partnership with local churches to proclaim and demonstrate the Good News of the Kingdom through discipleship, leadership development, youth ministry, community development and living incarnationally in the neighborhood. Our activities include after-school programs, tutoring, art, youth clubs, summer day camps, and job training. We also host Urban Immersion experiences for outside groups which focus on themes of justice, unity, and issues of reconciliation within the church.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://iteams.us/wws"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T682
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T682 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T682, 'click', function() {
ib_T682.open(map,marker_T682);
});

// end info window - T682 //

// marker - T674 //

var marker_T674 = new google.maps.Marker({
map: map,
draggable: false,
position: T674,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T674 = document.createElement("div");
boxText_T674.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T674.innerHTML = '<div style="padding: 20px;"><h1>USA - Chicago (S. Asian Friendship Center)</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">To advance Jesus movements among the most needy that are indigenously   led, reproducing and witnessing through good deeds and the power of God. The SAFC is located in the heart of an Indian/Pakistani neighborhood in the North side of Chicago and exists to reach out to Muslims and Hindus with Christ&apos;s love and the gospel. English classes. Movie clubs for the kids. Day trips for the South Asian women. Bible studies and worship services. Books/resources for seekers.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://iteams.us/wws"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T674
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T674 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T674, 'click', function() {
ib_T674.open(map,marker_T674);
});

// end info window - T674 //

// marker - T734 //

var marker_T734 = new google.maps.Marker({
map: map,
draggable: false,
position: T734,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T734 = document.createElement("div");
boxText_T734.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T734.innerHTML = '<div style="padding: 20px;"><h1>USA - Elgin (Urban Team)</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">The Elgin Urban Team exists to help the urban poor of the Elgin area to be introduced to God and to be disciples into local churches. At this time there is the Homeless Breakfast which runs every weekday from seven to eight AM. Another part of the ministry is leading Bible Studies on a regular basis at Wayside Center (a day room for the homeless). Court advocacy is another part of the ministry. From time to time we go to court and work to get candidates into a rehab program.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/usa-elgin-urban-team/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T734
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T734 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T734, 'click', function() {
ib_T734.open(map,marker_T734);
});

// end info window - T734 //

// marker - T675 //

var marker_T675 = new google.maps.Marker({
map: map,
draggable: false,
position: T675,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T675 = document.createElement("div");
boxText_T675.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T675.innerHTML = '<div style="padding: 20px;"><h1>USA - Fresno</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">Our Fresno team seeks to come alongside the local church and together be vessels that learn, interceed, teach, disciple and intentionally live in relationship with our neighbors. In partnership with Bethany InnerCity Church we nurture leaders and make disciples who are God chasers and God worshipers, to empower people with Kingdom values that flood the neighborhood with Good News and a greater passion for shalom. We partner with Bethany Inner City Church and work in the Lowell neighborhood in downtown Fresno. Our church visibly reflects the neighborhood in that we are of multiple ethnic and social groups. While once being the city&apos;s wealthiest neighborhood, the Lowell community is now a neighborhood of concentrated poverty in Fresno. We are a relational ministry that works in a holistic manner to minister to the physical, spiritual, emotional and social needs of individuals and families. We see ourselves as a bridge from the neighborhood to the church and from the church to the neighborhood. We are involved in regular activities for children, teens and adults, such as Bible Studies, Reading Club, Youth Group, Community Organizing, Food Distribution Ministry, Crisis Counseling, Sunday Worship, Prayer Walks and much more.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/usa-fresno/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T675
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T675 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T675, 'click', function() {
ib_T675.open(map,marker_T675);
});

// end info window - T675 //

// marker - T677 //

var marker_T677 = new google.maps.Marker({
map: map,
draggable: false,
position: T677,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T677 = document.createElement("div");
boxText_T677.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T677.innerHTML = '<div style="padding: 20px;"><h1>International Teams</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">Lives and communities transformed by the power of God. Learn more about us by exploring our website at <a style="color: yellow" href="http://www.iteams.us">www.iteams.us</a></h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://iteams.us/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T677
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T677 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T677, 'click', function() {
ib_T677.open(map,marker_T677);
});

// end info window - T677 //

// marker - T679 //

var marker_T679 = new google.maps.Marker({
map: map,
draggable: false,
position: T679,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T679 = document.createElement("div");
boxText_T679.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T679.innerHTML = '<div style="padding: 20px;"><h1>USA - Michigan</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">This team exists to make disciples of all nations beginning with the thrift store ministry, moving to the surrounding shopping center, the local neighborhood in which the shopping center exists, and the uttermost parts of the earth (training and equipping). Ongoing cross-cultural evangelism &amp&#59; discipling ministry, beginning with relationships established at a non-traditional ministry center. This ministry will seek to develop an ever deepening level of partnership of local churches with the goal of transitioning &ldquo&#59;ownership&rdquo&#59; of it from this team to local churches.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/usa-michigan/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T679
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T679 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T679, 'click', function() {
ib_T679.open(map,marker_T679);
});

// end info window - T679 //



// marker - T981 //

var marker_T981 = new google.maps.Marker({
map: map,
draggable: false,
position: T981,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T981 = document.createElement("div");
boxText_T981.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T981.innerHTML = '<div style="padding: 20px;"><h1>USA - Portland, OR (Rockwood)</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">We desire to see the lives of trafficking victims and of refugees transformed by the power of God, ultimately resulting in transformed communities throughout Portland and the USA. We currently work on two separate yet intertwined ministries. First, we work to fight against sex trafficking, through prevention education, community awareness and mobilization, and by supporting victims of trafficking. Second we reach out to refugee populations in Portland, seeking to meet the needs that arise. Our goal is to show Christ&apos;s love to these vulnerable populations.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/usa-portland-or-rockwood/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T981
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T981 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T981, 'click', function() {
ib_T981.open(map,marker_T981);
});

// end info window - T981 //

// marker - T104 //

var marker_T104 = new google.maps.Marker({
map: map,
draggable: false,
position: T104,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T104 = document.createElement("div");
boxText_T104.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T104.innerHTML = '<div style="padding: 20px;"><h1>USA - Syracuse, New York</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">Communities are made up of individuals. As individual lives are transformed by the love of Messiah, it impacts the community. We are seeking to transform the North Side of Syracuse one heart at a time. Tom and JoAnn are partnering with an area church with a shared vision of demonstrating the love of God in word and deed by meeting some practical needs of resettled refugees (teaching English, navigating US Culture, etc.) on the &ldquo&#59;North Side&rdquo&#59; of Syracuse, NY. These refugees come from over 30 countries. Many think that once refugees come to the US that their difficulties are over. That&apos;s not the case.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/usa-syracuse-new-york/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T104
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T104 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T104, 'click', function() {
ib_T104.open(map,marker_T104);
});

// end info window - T104 //

// marker - T109 //

var marker_T109 = new google.maps.Marker({
map: map,
draggable: false,
position: T109,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T109 = document.createElement("div");
boxText_T109.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T109.innerHTML = '<div style="padding: 20px;"><h1>Dominican Republic - San Pedro de Marcoris</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">The San Pedro area of the Macoris province is located on the southern shore of the Dominican Republic about 1 hour east of the capital (Santo Domingo). San Pedro is replete with small communities characterized by poverty of both a physical and spiritual nature. Lack of sufficient education and work opportunities produce an overall sense of futility. Health issues (both in terms of prevention and treatment) daily plague the people. More than anything, the family unit suffers from those issues already mentioned plus a terrible lack of conviction that God ordained family and that the kingdom of God is present in the here and now.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/dominican-republic-san-pedro/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T109
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T109 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T109, 'click', function() {
ib_T109.open(map,marker_T109);
});

// end info window - T109 //

// marker - T697 //

var marker_T697 = new google.maps.Marker({
map: map,
draggable: false,
position: T697,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T697 = document.createElement("div");
boxText_T697.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T697.innerHTML = '<div style="padding: 20px;"><h1>Wales - Refresh International</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">Making Jesus known and seeing lives transformed by the power of God by empowering people to be released into wholeness. Providing debriefing, counselling and training to ITeams field staff and others in ministry. Wayne is Head of People Development for International Teams UK.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/wales-refresh-international/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T697
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T697 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T697, 'click', function() {
ib_T697.open(map,marker_T697);
});

// end info window - T697 //

// marker - T989 //

var marker_T989 = new google.maps.Marker({
map: map,
draggable: false,
position: T989,
visible: true,
icon: '<?php bloginfo('template_directory'); ?>/images/newmarker14.png'
});

var boxText_T989 = document.createElement("div");
boxText_T989.style.cssText = "position: relative; border: 0px; margin-top: 20px; background: #232323; color: #ebebeb; padding: 0px; -webkit-border-top-left-radius: 4px; -webkit-border-bottom-right-radius: 4px; -webkit-border-bottom-left-radius: 4px; -moz-border-radius-topleft: 4px; -moz-border-radius-bottomright: 4px; -moz-border-radius-bottomleft: 4px; border-top-left-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px;";
boxText_T989.innerHTML = '<div style="padding: 20px;"><h1>Zambia - Chongwe</h1><h3 style="margin-top: 15px; margin-bottom: 15px;">Our ministry is a community transformation ministry that God will use to impact areas such as extreme poverty, gender based violence (GBV), oppression of women and spiritual education and discipleship. This is currently being done with the widows and vulnerable women by offering them opportunities for sustainable income through the use of their gifts and skills in producing products that are purchased and exported for sale in the US market. We also address spiritual and emotional healing to women who have experienced much abuse, by coordinating and implementing women&#39;s conferences, Bible Study and by being in relationship with precious women on a personal level, knowing and being known. We also focus on ministry to the men of Zambia by working with them on sustainability programs and community development opportunities.  This will include many of the things stated above but for men, like Bible Study, teaching and real, honest, open, relationships.  Men&#39;s/Pastor&#39;s conferences are on our horizon and we embrace this challenge with God, as well.  With this question to guide us&hellip&#59;.What has God called men to be?  Not culture, not tradition, not circumstances and not ourselves, but God. A shelter/safe house is also in our future and requires much planning and faith in Him who will accomplish all these desires.  Prostitution is a huge issue and in our findings, is an issue that with the help of our partners on the ground can be addressed!  A drop in shelter is needed for widows as well and was confirmed by another partner organization in Lusaka.  With God all things are possible.</h3><div><a href="http://go.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-go-button.png" /></a><a href="http://iteams.us/give"><img src="<?php bloginfo('template_directory'); ?>/images/map-give-button.png" /></a><a href="http://with.iteams.us"><img src="<?php bloginfo('template_directory'); ?>/images/map-partner-button.png" /></a><a href="http://www.iteams.us/wws/zambia-chongwe-2/"><img src="<?php bloginfo('template_directory'); ?>/images/map-more-button.png" /></a></div></div><img src="" class="ibimg" />';

var myOptions = {
content: boxText_T989
,disableAutoPan: false
,maxWidth: 0
,pixelOffset: new google.maps.Size(-220, 0)
,zIndex: null
,boxStyle: {
background: "url('<?php bloginfo('template_directory'); ?>/images/ib-map-header.png') no-repeat"
,opacity: 0.95
,border: 0
,width: "440px"
}
,closeBoxMargin: "2px"
,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
,infoBoxClearance: new google.maps.Size(10, 10)
,isHidden: false
,pane: "floatPane"
,enableEventPropagation: false
};

var ib_T989 = new InfoBox(myOptions);

google.maps.event.addListener(marker_T989, 'click', function() {
ib_T989.open(map,marker_T989);
});

// end info window - T989 //
