// about us page scripts

function sectionSwitch(clcikbtn,event){
    for (let index =1; index<=3; index++){
        document.getElementById("abt_change_block"+index).style.display="none";
        document.getElementById("abt_leader_btn"+index).style.backgroundColor="white";
        document.getElementById("abt_leader_btn"+index).style.color="black";

    }
    document.getElementById(clcikbtn).style.display="flex";
    if (event.target.id=="abt_leader_btn1") {
        document.getElementById("abt_leader_btn1").style.backgroundColor="rgb(89, 89, 231)";
        document.getElementById("abt_leader_btn1").style.color="white";
    }else if (event.target.id=="abt_leader_btn2") {
        document.getElementById("abt_leader_btn2").style.backgroundColor="rgb(89, 89, 231)";
        document.getElementById("abt_leader_btn2").style.color="white";
    }else if (event.target.id=="abt_leader_btn3") {
        document.getElementById("abt_leader_btn3").style.backgroundColor="rgb(89, 89, 231)";
        document.getElementById("abt_leader_btn3").style.color="white";
    }

}

// profile page script

function profileedit(clcikbtn){
    // for (let index =1; index<=2; index++){
    // document.getElementById("pro_box"+index).style.display="none";
    // }
    document.getElementById("pro_box1").style.display="none";
    document.getElementById("pro_box2").style.display="none";

    document.getElementById(clcikbtn).style.display="block";
}