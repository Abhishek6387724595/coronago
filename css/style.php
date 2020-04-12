<style type=text/css>

*{
    margin:0px;
    padding:0px;
    box-sizing:border-box;
}
html{
    width:100%;
    height:100%;
    margin:0px;
    padding:0px;
    overflow-x: hidden;
    scroll-behavior:smooth;
}
/*body{
    width:100%;
    height:100%;
    margin:0px;
    padding:0px;
    overflow-x: hidden;
}*/
.row{
    margin-left:0!important;
    margin-right:0!important;
}

.nav_style{
    background-color:#a29bfe!important;
}
.nav_style a{
    color:white;
}
.main_headert{
    height:450px;
    width:100%;
}
.rightside h1{
    font-size:3rem;
}
.corona_rot img{
    animation:gocorona 3s linear infinite;
    ;
}
@keyframes gocorona{
    0% {transform:rotate(0);}
    100% {transform:rotate(360deg);}
}
.leftside img{animation: heartbeat 5s linear infinite;}
@keyframes heartbeat
{
    0%
    {
        transform:scale(.75);
    }
    20%
    {
        transform:scale(1);
    }
    40%
    {
        transform:scale(.75);
    }
    60%
    {
        transform:scale(1);
    }
    80%
    {
        transform:scale(.75);
    }
    100%
    {
        transform:scale(1);
    }
}
/*********************Corona Update************** */

.corona_update{
    margin:0 0 30px 0; 
}
.corona_update h3{color:#ff7675;}
.corona_update h1{font-size:3rem; text-align:center;}

/****************about section**************** */

.sub_section{
    background-color: #fbfafd;
}

/* /////////////////////footer/////////////////////*/

.footer_style{
    background-color:#a29bfe!important;
}
.footer_style p{
    margin-bottom:0!important;
}
@media(max-width:768px){
    .main_header{ height:700px; text-align:center;}

    .main_header h1{
        text-align:center;
        padding:0;
        width:100%;
        font-size:30px;
    }
}


</style>