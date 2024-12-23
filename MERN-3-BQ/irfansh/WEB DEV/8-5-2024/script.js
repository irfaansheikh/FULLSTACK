function add(){
    if(output2.innerText === '+'){
        output1.innerText = +(output1.innerText) + +(output3.innerText);
        output2.innerText = '';
        output3.innerText = '';
    }else if(output2.innerText === '-'){
        output1.innerText = +(output1.innerText) - +(output3.innerText);
        output2.innerText = '';
        output3.innerText = '';
    }else if(output2.innerText === '*'){
        output1.innerText = +(output1.innerText) * +(output3.innerText);
        output2.innerText = '';
        output3.innerText = '';
    }else{
        output1.innerText = +(output1.innerText) / +(output3.innerText);
        output2.innerText = '';
        output3.innerText = '';
    }
}