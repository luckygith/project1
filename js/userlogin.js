function validation(){
    if(form.name.value==""){
        alert("please enter name");
        form.name.focus();
        return false;
    }
    
    if(form.email.value==""){
        alert("please enter email");
        form.email.focus();
        return false;
    }

    if(form.phonenumber.value==""){
        alert("please enter number");
        form.phonenumber.focus();
        return false;
    }
    if(isNaN(form.phonenumber.value)){
        alert("invalid number");
        form.phonenumber.focus();
        return false;
    }
    if((form.phonenumber.value).length>10)
    {
        alert("enter only 10 digits");
        form.phonenumber.focus();
        return false;
    }
    
return true;

}

/* count*/
let countDate=new Date('may 20,2022 00:00:00').getTime();
function countDown(){
    let now=new Date().getTime();

    gap=countDate - now;

    let second=1000;
    let minute=second * 60;
    let hour=minute * 60;
    let day=hour * 24;

    let d=Math.floor(gap / (day));
    let h=Math.floor((gap%(day))/(hour));
    let m=Math.floor((gap%(day))/(minute));
    let s=Math.floor((gap%(day))/(second));

document.getElementById('day').innerText=d;
document.getElementById('hour').innerText=h;
document.getElementById('minute').innerText=m;
document.getElementById('second').innerText=s;
}
setInterval(function(){
    countDown();
},1000)


