$(document).ready(function(){
	$(".thumb-indicator").click(function(){
		$("#thumb-hide").toggle();
		$(".thumb-indicator").toggleClass('thumb-indicator-rotate');
		$("#thumb-show").toggleClass('col-sm-9 col-md-9 col-lg-9 col-xl-9');
		$("#thumb-show").toggleClass('col-sm-12 col-md-12 col-lg-12 col-xl-12');
		$("#ninja-slider").toggleClass('mt-0');
	});
});

// $(document).ready(function(){
// 	$(".assessment_tab").click(function(){
// 		$(".wr_lj_notes").fadeOut();
// 		$(".wr_assessment_ans").fadeIn();
// 	});
// });

// $(document).ready(function(){
// 	$(".learnerjournal_tab").click(function(){
// 		$(".wr_lj_notes").fadeIn();
// 		$(".wr_assessment_ans").fadeOut();
// 	});
// });

// $(document).ready(function(){
// 	$(".theory_tab").click(function(){
// 		$(".wr_lj_notes").fadeOut();
// 		$(".wr_assessment_ans").fadeIn();
// 	});
// });

$(document).ready(function(){

	google.charts.load("current", {packages:["corechart"]});
	google.charts.setOnLoadCallback(drawChart);
	function drawChart() {
		var data = google.visualization.arrayToDataTable([
			['Sessions', 'percentage'],
			['Sessions completed', 7],
			['Sessions remaining', 3]
		]);

		var options = {
			title: '',
			width: '100%',
			pieHole: 0.4,
			fill: '#ffffff00',
			colors: ['#51c4ca','#d84875'],
			pieStartAngle: 100,
			tooltip: { trigger: 'none' },
			backgroundColor: '',
			chartArea:{left:10,top:15,width:'100%'},
			legend: {position: 'bottom', textStyle: {color: '#30485e', fontName: 'Myriad Pro Semibold', fontSize: 12}},
			pieSliceTextStyle: {color: '#ffffff', fontName: 'Myriad Pro Semibold', fontSize: 12}
		};

		var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
			chart.draw(data, options);
	}
});

$(document).ready(function($){
	$('#q1-1').on({'click': function() {
		$('.q1-1').attr('src','images/emoji/11.png');
		$('.q1-2').attr('src','images/emoji/2.png');
		$('.q1-3').attr('src','images/emoji/3.png');
		$('.q1-4').attr('src','images/emoji/4.png');
	}});
	$('#q1-2').on({'click': function() {
		$('.q1-1').attr('src','images/emoji/1.png');
		$('.q1-2').attr('src','images/emoji/22.png');
		$('.q1-3').attr('src','images/emoji/3.png');
		$('.q1-4').attr('src','images/emoji/4.png');
	}});
	$('#q1-3').on({'click': function() {
		$('.q1-1').attr('src','images/emoji/1.png');
		$('.q1-2').attr('src','images/emoji/2.png');
		$('.q1-3').attr('src','images/emoji/33.png');
		$('.q1-4').attr('src','images/emoji/4.png');
	}});
	$('#q1-4').on({'click': function() {
		$('.q1-1').attr('src','images/emoji/1.png');
		$('.q1-2').attr('src','images/emoji/2.png');
		$('.q1-3').attr('src','images/emoji/3.png');
		$('.q1-4').attr('src','images/emoji/44.png');
	}});
});

$(document).ready(function($){
	$('#q2-1').on({'click': function() {
		$('.q2-1').attr('src','images/emoji/11.png');
		$('.q2-2').attr('src','images/emoji/2.png');
		$('.q2-3').attr('src','images/emoji/3.png');
		$('.q2-4').attr('src','images/emoji/4.png');
	}});
	$('#q2-2').on({'click': function() {
		$('.q2-1').attr('src','images/emoji/1.png');
		$('.q2-2').attr('src','images/emoji/22.png');
		$('.q2-3').attr('src','images/emoji/3.png');
		$('.q2-4').attr('src','images/emoji/4.png');
	}});
	$('#q2-3').on({'click': function() {
		$('.q2-1').attr('src','images/emoji/1.png');
		$('.q2-2').attr('src','images/emoji/2.png');
		$('.q2-3').attr('src','images/emoji/33.png');
		$('.q2-4').attr('src','images/emoji/4.png');
	}});
	$('#q2-4').on({'click': function() {
		$('.q2-1').attr('src','images/emoji/1.png');
		$('.q2-2').attr('src','images/emoji/2.png');
		$('.q2-3').attr('src','images/emoji/3.png');
		$('.q2-4').attr('src','images/emoji/44.png');
	}});
});

$(document).ready(function($){
	$('#q3-1').on({'click': function() {
		$('.q3-1').attr('src','images/emoji/11.png');
		$('.q3-2').attr('src','images/emoji/2.png');
		$('.q3-3').attr('src','images/emoji/3.png');
		$('.q3-4').attr('src','images/emoji/4.png');
	}});
	$('#q3-2').on({'click': function() {
		$('.q3-1').attr('src','images/emoji/1.png');
		$('.q3-2').attr('src','images/emoji/22.png');
		$('.q3-3').attr('src','images/emoji/3.png');
		$('.q3-4').attr('src','images/emoji/4.png');
	}});
	$('#q3-3').on({'click': function() {
		$('.q3-1').attr('src','images/emoji/1.png');
		$('.q3-2').attr('src','images/emoji/2.png');
		$('.q3-3').attr('src','images/emoji/33.png');
		$('.q3-4').attr('src','images/emoji/4.png');
	}});
	$('#q3-4').on({'click': function() {
		$('.q3-1').attr('src','images/emoji/1.png');
		$('.q3-2').attr('src','images/emoji/2.png');
		$('.q3-3').attr('src','images/emoji/3.png');
		$('.q3-4').attr('src','images/emoji/44.png');
	}});
});

$(document).ready(function($){
	$('#q4-1').on({'click': function() {
		$('.q4-1').attr('src','images/emoji/11.png');
		$('.q4-2').attr('src','images/emoji/2.png');
		$('.q4-3').attr('src','images/emoji/3.png');
		$('.q4-4').attr('src','images/emoji/4.png');
	}});
	$('#q4-2').on({'click': function() {
		$('.q4-1').attr('src','images/emoji/1.png');
		$('.q4-2').attr('src','images/emoji/22.png');
		$('.q4-3').attr('src','images/emoji/3.png');
		$('.q4-4').attr('src','images/emoji/4.png');
	}});
	$('#q4-3').on({'click': function() {
		$('.q4-1').attr('src','images/emoji/1.png');
		$('.q4-2').attr('src','images/emoji/2.png');
		$('.q4-3').attr('src','images/emoji/33.png');
		$('.q4-4').attr('src','images/emoji/4.png');
	}});
	$('#q4-4').on({'click': function() {
		$('.q4-1').attr('src','images/emoji/1.png');
		$('.q4-2').attr('src','images/emoji/2.png');
		$('.q4-3').attr('src','images/emoji/3.png');
		$('.q4-4').attr('src','images/emoji/44.png');
	}});
});

$(document).ready(function($){
	$('#q5-1').on({'click': function() {
		$('.q5-1').attr('src','images/emoji/11.png');
		$('.q5-2').attr('src','images/emoji/2.png');
		$('.q5-3').attr('src','images/emoji/3.png');
		$('.q5-4').attr('src','images/emoji/4.png');
	}});
	$('#q5-2').on({'click': function() {
		$('.q5-1').attr('src','images/emoji/1.png');
		$('.q5-2').attr('src','images/emoji/22.png');
		$('.q5-3').attr('src','images/emoji/3.png');
		$('.q5-4').attr('src','images/emoji/4.png');
	}});
	$('#q5-3').on({'click': function() {
		$('.q5-1').attr('src','images/emoji/1.png');
		$('.q5-2').attr('src','images/emoji/2.png');
		$('.q5-3').attr('src','images/emoji/33.png');
		$('.q5-4').attr('src','images/emoji/4.png');
	}});
	$('#q5-4').on({'click': function() {
		$('.q5-1').attr('src','images/emoji/1.png');
		$('.q5-2').attr('src','images/emoji/2.png');
		$('.q5-3').attr('src','images/emoji/3.png');
		$('.q5-4').attr('src','images/emoji/44.png');
	}});
});

$(document).ready(function($){
	$('#q6-1').on({'click': function() {
		$('.q6-1').attr('src','images/emoji/11.png');
		$('.q6-2').attr('src','images/emoji/2.png');
		$('.q6-3').attr('src','images/emoji/3.png');
		$('.q6-4').attr('src','images/emoji/4.png');
	}});
	$('#q6-2').on({'click': function() {
		$('.q6-1').attr('src','images/emoji/1.png');
		$('.q6-2').attr('src','images/emoji/22.png');
		$('.q6-3').attr('src','images/emoji/3.png');
		$('.q6-4').attr('src','images/emoji/4.png');
	}});
	$('#q6-3').on({'click': function() {
		$('.q6-1').attr('src','images/emoji/1.png');
		$('.q6-2').attr('src','images/emoji/2.png');
		$('.q6-3').attr('src','images/emoji/33.png');
		$('.q6-4').attr('src','images/emoji/4.png');
	}});
	$('#q6-4').on({'click': function() {
		$('.q6-1').attr('src','images/emoji/1.png');
		$('.q6-2').attr('src','images/emoji/2.png');
		$('.q6-3').attr('src','images/emoji/3.png');
		$('.q6-4').attr('src','images/emoji/44.png');
	}});
});

$(document).ready(function($){
	$('#q7-1').on({'click': function() {
		$('.q7-1').attr('src','images/emoji/11.png');
		$('.q7-2').attr('src','images/emoji/2.png');
		$('.q7-3').attr('src','images/emoji/3.png');
		$('.q7-4').attr('src','images/emoji/4.png');
	}});
	$('#q7-2').on({'click': function() {
		$('.q7-1').attr('src','images/emoji/1.png');
		$('.q7-2').attr('src','images/emoji/22.png');
		$('.q7-3').attr('src','images/emoji/3.png');
		$('.q7-4').attr('src','images/emoji/4.png');
	}});
	$('#q7-3').on({'click': function() {
		$('.q7-1').attr('src','images/emoji/1.png');
		$('.q7-2').attr('src','images/emoji/2.png');
		$('.q7-3').attr('src','images/emoji/33.png');
		$('.q7-4').attr('src','images/emoji/4.png');
	}});
	$('#q7-4').on({'click': function() {
		$('.q7-1').attr('src','images/emoji/1.png');
		$('.q7-2').attr('src','images/emoji/2.png');
		$('.q7-3').attr('src','images/emoji/3.png');
		$('.q7-4').attr('src','images/emoji/44.png');
	}});
});

//**********************************************************************************//


$(document).ready(function($){
	$('#q11-1').on({'click': function() {
		$('.q11-1').attr('src','images/emoji/11.png');
		$('.q11-2').attr('src','images/emoji/2.png');
		$('.q11-3').attr('src','images/emoji/3.png');
		$('.q11-4').attr('src','images/emoji/4.png');
	}});
	$('#q11-2').on({'click': function() {
		$('.q11-1').attr('src','images/emoji/1.png');
		$('.q11-2').attr('src','images/emoji/22.png');
		$('.q11-3').attr('src','images/emoji/3.png');
		$('.q11-4').attr('src','images/emoji/4.png');
	}});
	$('#q11-3').on({'click': function() {
		$('.q11-1').attr('src','images/emoji/1.png');
		$('.q11-2').attr('src','images/emoji/2.png');
		$('.q11-3').attr('src','images/emoji/33.png');
		$('.q11-4').attr('src','images/emoji/4.png');
	}});
	$('#q11-4').on({'click': function() {
		$('.q11-1').attr('src','images/emoji/1.png');
		$('.q11-2').attr('src','images/emoji/2.png');
		$('.q11-3').attr('src','images/emoji/3.png');
		$('.q11-4').attr('src','images/emoji/44.png');
	}});
});

$(document).ready(function($){
	$('#q22-1').on({'click': function() {
		$('.q22-1').attr('src','images/emoji/11.png');
		$('.q22-2').attr('src','images/emoji/2.png');
		$('.q22-3').attr('src','images/emoji/3.png');
		$('.q22-4').attr('src','images/emoji/4.png');
	}});
	$('#q22-2').on({'click': function() {
		$('.q22-1').attr('src','images/emoji/1.png');
		$('.q22-2').attr('src','images/emoji/22.png');
		$('.q22-3').attr('src','images/emoji/3.png');
		$('.q22-4').attr('src','images/emoji/4.png');
	}});
	$('#q22-3').on({'click': function() {
		$('.q22-1').attr('src','images/emoji/1.png');
		$('.q22-2').attr('src','images/emoji/2.png');
		$('.q22-3').attr('src','images/emoji/33.png');
		$('.q22-4').attr('src','images/emoji/4.png');
	}});
	$('#q22-4').on({'click': function() {
		$('.q22-1').attr('src','images/emoji/1.png');
		$('.q22-2').attr('src','images/emoji/2.png');
		$('.q22-3').attr('src','images/emoji/3.png');
		$('.q22-4').attr('src','images/emoji/44.png');
	}});
});

$(document).ready(function($){
	$('#q33-1').on({'click': function() {
		$('.q33-1').attr('src','images/emoji/11.png');
		$('.q33-2').attr('src','images/emoji/2.png');
		$('.q33-3').attr('src','images/emoji/3.png');
		$('.q33-4').attr('src','images/emoji/4.png');
	}});
	$('#q33-2').on({'click': function() {
		$('.q33-1').attr('src','images/emoji/1.png');
		$('.q33-2').attr('src','images/emoji/22.png');
		$('.q33-3').attr('src','images/emoji/3.png');
		$('.q33-4').attr('src','images/emoji/4.png');
	}});
	$('#q33-3').on({'click': function() {
		$('.q33-1').attr('src','images/emoji/1.png');
		$('.q33-2').attr('src','images/emoji/2.png');
		$('.q33-3').attr('src','images/emoji/33.png');
		$('.q33-4').attr('src','images/emoji/4.png');
	}});
	$('#q33-4').on({'click': function() {
		$('.q33-1').attr('src','images/emoji/1.png');
		$('.q33-2').attr('src','images/emoji/2.png');
		$('.q33-3').attr('src','images/emoji/3.png');
		$('.q33-4').attr('src','images/emoji/44.png');
	}});
});

$(document).ready(function($){
	$('#q44-1').on({'click': function() {
		$('.q44-1').attr('src','images/emoji/11.png');
		$('.q44-2').attr('src','images/emoji/2.png');
		$('.q44-3').attr('src','images/emoji/3.png');
		$('.q44-4').attr('src','images/emoji/4.png');
	}});
	$('#q44-2').on({'click': function() {
		$('.q44-1').attr('src','images/emoji/1.png');
		$('.q44-2').attr('src','images/emoji/22.png');
		$('.q44-3').attr('src','images/emoji/3.png');
		$('.q44-4').attr('src','images/emoji/4.png');
	}});
	$('#q44-3').on({'click': function() {
		$('.q44-1').attr('src','images/emoji/1.png');
		$('.q44-2').attr('src','images/emoji/2.png');
		$('.q44-3').attr('src','images/emoji/33.png');
		$('.q44-4').attr('src','images/emoji/4.png');
	}});
	$('#q44-4').on({'click': function() {
		$('.q44-1').attr('src','images/emoji/1.png');
		$('.q44-2').attr('src','images/emoji/2.png');
		$('.q44-3').attr('src','images/emoji/3.png');
		$('.q44-4').attr('src','images/emoji/44.png');
	}});
});

$(document).ready(function($){
	$('#q55-1').on({'click': function() {
		$('.q55-1').attr('src','images/emoji/11.png');
		$('.q55-2').attr('src','images/emoji/2.png');
		$('.q55-3').attr('src','images/emoji/3.png');
		$('.q55-4').attr('src','images/emoji/4.png');
	}});
	$('#q55-2').on({'click': function() {
		$('.q55-1').attr('src','images/emoji/1.png');
		$('.q55-2').attr('src','images/emoji/22.png');
		$('.q55-3').attr('src','images/emoji/3.png');
		$('.q55-4').attr('src','images/emoji/4.png');
	}});
	$('#q55-3').on({'click': function() {
		$('.q55-1').attr('src','images/emoji/1.png');
		$('.q55-2').attr('src','images/emoji/2.png');
		$('.q55-3').attr('src','images/emoji/33.png');
		$('.q55-4').attr('src','images/emoji/4.png');
	}});
	$('#q55-4').on({'click': function() {
		$('.q55-1').attr('src','images/emoji/1.png');
		$('.q55-2').attr('src','images/emoji/2.png');
		$('.q55-3').attr('src','images/emoji/3.png');
		$('.q55-4').attr('src','images/emoji/44.png');
	}});
});

$(document).ready(function($){
	$('#q66-1').on({'click': function() {
		$('.q66-1').attr('src','images/emoji/11.png');
		$('.q66-2').attr('src','images/emoji/2.png');
		$('.q66-3').attr('src','images/emoji/3.png');
		$('.q66-4').attr('src','images/emoji/4.png');
	}});
	$('#q66-2').on({'click': function() {
		$('.q66-1').attr('src','images/emoji/1.png');
		$('.q66-2').attr('src','images/emoji/22.png');
		$('.q66-3').attr('src','images/emoji/3.png');
		$('.q66-4').attr('src','images/emoji/4.png');
	}});
	$('#q66-3').on({'click': function() {
		$('.q66-1').attr('src','images/emoji/1.png');
		$('.q66-2').attr('src','images/emoji/2.png');
		$('.q66-3').attr('src','images/emoji/33.png');
		$('.q66-4').attr('src','images/emoji/4.png');
	}});
	$('#q66-4').on({'click': function() {
		$('.q66-1').attr('src','images/emoji/1.png');
		$('.q66-2').attr('src','images/emoji/2.png');
		$('.q66-3').attr('src','images/emoji/3.png');
		$('.q66-4').attr('src','images/emoji/44.png');
	}});
});

$(document).ready(function($){
	$('#q77-1').on({'click': function() {
		$('.q77-1').attr('src','images/emoji/11.png');
		$('.q77-2').attr('src','images/emoji/2.png');
		$('.q77-3').attr('src','images/emoji/3.png');
		$('.q77-4').attr('src','images/emoji/4.png');
	}});
	$('#q77-2').on({'click': function() {
		$('.q77-1').attr('src','images/emoji/1.png');
		$('.q77-2').attr('src','images/emoji/22.png');
		$('.q77-3').attr('src','images/emoji/3.png');
		$('.q77-4').attr('src','images/emoji/4.png');
	}});
	$('#q77-3').on({'click': function() {
		$('.q77-1').attr('src','images/emoji/1.png');
		$('.q77-2').attr('src','images/emoji/2.png');
		$('.q77-3').attr('src','images/emoji/33.png');
		$('.q77-4').attr('src','images/emoji/4.png');
	}});
	$('#q77-4').on({'click': function() {
		$('.q77-1').attr('src','images/emoji/1.png');
		$('.q77-2').attr('src','images/emoji/2.png');
		$('.q77-3').attr('src','images/emoji/3.png');
		$('.q77-4').attr('src','images/emoji/44.png');
	}});
});

$(document).ready(function($){
	$('#q88-1').on({'click': function() {
		$('.q88-1').attr('src','images/emoji/11.png');
		$('.q88-2').attr('src','images/emoji/2.png');
		$('.q88-3').attr('src','images/emoji/3.png');
		$('.q88-4').attr('src','images/emoji/4.png');
	}});
	$('#q88-2').on({'click': function() {
		$('.q88-1').attr('src','images/emoji/1.png');
		$('.q88-2').attr('src','images/emoji/22.png');
		$('.q88-3').attr('src','images/emoji/3.png');
		$('.q88-4').attr('src','images/emoji/4.png');
	}});
	$('#q88-3').on({'click': function() {
		$('.q88-1').attr('src','images/emoji/1.png');
		$('.q88-2').attr('src','images/emoji/2.png');
		$('.q88-3').attr('src','images/emoji/33.png');
		$('.q88-4').attr('src','images/emoji/4.png');
	}});
	$('#q88-4').on({'click': function() {
		$('.q88-1').attr('src','images/emoji/1.png');
		$('.q88-2').attr('src','images/emoji/2.png');
		$('.q88-3').attr('src','images/emoji/3.png');
		$('.q88-4').attr('src','images/emoji/44.png');
	}});
});