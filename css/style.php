<style type="text/css">

*{
	margin: 0; padding: 0; 
	font-family: 'Muli', sans-serif;
	box-sizing: border-box;
	

}



html{

scroll-behavior: smooth;

}

.mynav{
	
	font-family: 'Bitter', serif !important;
	font-size: bold;
	letter-spacing: 1px;
}


.mynav a {
	

	font-family: 'Bitter', serif !important;

	letter-spacing: 1px;
	text-decoration:none;
    color:#181174 !important;
    margin-right: 8px;
 	padding:8px 8px 8px 8px;
    border-bottom: 3px solid transparent;
}

.mynav a:hover {
    border-bottom: 3px solid #181174;
}


#content{
	min-height: 100vh;
	position: relative;
	justify-content: center;
	align-content: center;
	display: flex;
}



#wrap{
	
	align-items: center;
	padding-bottom: 4rem;
	width: 100%;
}


.main_header{
	min-height: 100vh;
	margin:auto;
	padding-top: 30vh;
}

html,body{
	width: 100%;

	/*overflow-x: hidden;*/

}

.main_header{
	/*height: 100vh;
	width: 100%;*/
	/*margin:auto;
	padding:auto;
	*/
background-image: linear-gradient(to right top, #02e0ff, #29d6ff, #45ccff, #5cc1fb, #70b6f4, #6eb9f5, #6bbcf7, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);
background-repeat: no-repeat;

background-size: 100% 100%;
letter-spacing: 1px;


	text-align: center;

}

#home{
	background-color: #B3D1FF;
	/*background-image: url('images/hand.png');*/
/*
	background-repeat: no-repeat;
	background-size:100%;*/

}

#home h1{
	color: #FF1313;
	font-size: 4rem;
	font-weight:bolder;
}


#about p{
	font-family: 'Bitter', serif !important;
	font-size: 1.2rem;
}


#prevention	{
background-color: #fbfafd;
	/*background-color: #B3D1FF;*/
}

#prevention img{
	border-radius: 12px;
}


.table-responsive{
	height: 450px;
	
	align-items: center;
	justify-content: center;
	margin:auto;
	padding: auto;
	overflow-y: scroll;
	font-size: 1.1rem;
	width: 94%;
}

#tval th{
	color: white !important;
	position: sticky;
	background-color: #00bcd4;
	top: 0;
	z-index: 99;
}


#tval tr th:nth-child(1)
{
	width: 9%;
	text-align: center;
}

#tval td{
	font-weight: bold;
}

.main_header h1{
	font-size: 3rem;
}


.sub_section{
	background-color: #fbfafd;
}

.sub_section 
 img{
        max-width: 80%;
        max-height: 80%;
        display: block; /* remove extra space below image */
    }


    #symptoms img{
    	height: 35vh;
    	width: 35vh;
    }
#symptoms figcaption{
	font-family: 'Bitter', serif !important;
}


    .colored_section{
    	background-color: #fbfafd;
    }


#prevention h1{
	align-items: center;
	justify-content: center;
	text-align: center;
}
#prevention p{
	font-family: 'Bitter', serif !important;
}

.myfoot{
   font-family: 'Bitter', serif !important;
	background-color:#EEEEEE !important;

}


#mybtn{

	display: block;
	z-index: 99;
	outline: none;
	border:none;
	background-color: #00A8FF;
	cursor: pointer;
	color: white;
	padding: 10px;
	border-radius: 10px;
	bottom: 30px;
	right: 14px;
	text-decoration: none;
	position: fixed;
	float: right;

	border-radius: 10px;
	
}

#mybtn:hover{
	background-color: #606060;
}
footer{
	background-color: lightgrey;
	position: absolute;
	/*height: 4rem;*/
	bottom: 0;
	width: 100%;
	margin-bottom: 0;
	
	
}


footer h5,p{
	margin-bottom: 0;
}
/*

@media screen and (min-width: 580px) {


.table-responsive{
	height: 400px;
	
	align-items: center;
	justify-content: center;
	margin:auto;
	padding: auto;
	overflow-y: scroll;
	font-size: 1.1rem;
	width: 100%;

}*/
	}
</style>