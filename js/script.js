// about us page scripts
function sectionSwitch(clcikbtn,event){
    for (let index =1; index<=3; index++){
        document.getElementById("abt_change_block"+index).style.display="none";
        document.getElementById("abt_leader_btn"+index).style.backgroundColor="white";
        document.getElementById("abt_leader_btn"+index).style.color="black";

    }
    document.getElementById(clcikbtn).style.display="flex";
    if (event.target.id=="abt_leader_btn1") {
        document.getElementById("abt_leader_btn1").style.backgroundColor="blue";
        document.getElementById("abt_leader_btn1").style.color="white";
    }else if (event.target.id=="abt_leader_btn2") {
        document.getElementById("abt_leader_btn2").style.backgroundColor="blue";
        document.getElementById("abt_leader_btn2").style.color="white";
    }else if (event.target.id=="abt_leader_btn3") {
        document.getElementById("abt_leader_btn3").style.backgroundColor="blue";
        document.getElementById("abt_leader_btn3").style.color="white";
    }

}