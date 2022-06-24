let bills =[];
let UserList = ["User1","User2","Both"];
let createValue=()=>{

    let ProductToSelect =[
        ['kawa',30,'User2'],
        ['herbata',10,'User1'],
        ['chleb',3.5,'User2'],
        ['mąka',4.2,'User2']
    ];

    let a='lidl',b='100',c='2022-04-27',d='User1';
    let test = new bill(
        a,
        b,
        c,
        d);
    test.listproduct = ProductToSelect;

    bills.push( test );

    let ProductToSelect2 =[
        ['kawa',30,'User1'],
        ['herbata',10,'User2'],
        ['chleb',3.5,'User1'],
        ['mąka',4.2,'User2']
    ];

    a='biedronka';
    b='250';
    c='2022-04-28';
    d='User2';
     test = new bill(
        a,
        b,
        c,
        d);
    test.listproduct = ProductToSelect2;
    test.listproduct.push(['toster',50,'Both']);

    bills.push( test );
}

class bill{
    constructor(name,count,date,whoPaid){
        this.name = name;
        this.count = count;
        this.date = date;
        this.whoPaid = whoPaid;
        this.listproduct = [];
    }


}

createTable = () =>{
    // console.log("Start craft");
    let table = document.createElement('table');
    let row = document.createElement('tr');
    let th1 = document.createElement('th');
    let th2 = document.createElement('th');
    let th3 = document.createElement('th');
    let th4 = document.createElement('th');
    let th5 = document.createElement('th');
    th1.appendChild(document.createTextNode('Nazwa Rachunku'));
    th2.appendChild(document.createTextNode('Kwota płatności'));
    th3.appendChild(document.createTextNode('Data'));
    th4.appendChild(document.createTextNode('Kto Płacił'));
    th5.appendChild(document.createTextNode('Edytuj Rachunek'));

    let documentFragment = document.createDocumentFragment();
    documentFragment.appendChild(th1);
    documentFragment.appendChild(th2);
    documentFragment.appendChild(th3);
    documentFragment.appendChild(th4);
    documentFragment.appendChild(th5);

    row.appendChild(documentFragment);
    table.appendChild(row);
    for (let index = 0; index < bills.length; ++index) {
        const e = bills[index];
        let row = document.createElement('tr');

        let cell1 = document.createElement('td');
        cell1.classList.add("td");
        let cell2 = document.createElement('td');
        cell2.classList.add("td");
        let cell3 = document.createElement('td');
        cell3.classList.add("td");
        let cell4 = document.createElement('td');
        cell4.classList.add("td");
        let cell5 = document.createElement('td');
        cell5.classList.add("td");

        cell1.appendChild(document.createTextNode(e.name));

        cell2.appendChild(document.createTextNode(e.count));

        cell3.appendChild(document.createTextNode(e.date));
        cell4.appendChild(document.createTextNode(e.whoPaid));
        cell5.appendChild(document.createTextNode('Select Me'));
        cell5.addEventListener("click", function() {
            console.log(index);
            listofelements(index);
        });
        let documentFragment = document.createDocumentFragment();
        documentFragment.appendChild(cell1);
        documentFragment.appendChild(cell2);
        documentFragment.appendChild(cell3);
        documentFragment.appendChild(cell4);
        documentFragment.appendChild(cell5);
        row.appendChild(documentFragment);
        table.appendChild(row);
    }
    document.getElementById("demo").innerHTML="";
   document.getElementById("demo").appendChild(table);

}
addBillForm=()=>{
    let br = document.createElement("br");
    let form = document.createElement("form");
    form.setAttribute("method", "");
    form.setAttribute("id", "AddBillForm");

    let FN = document.createElement("input");
    FN.setAttribute("type", "text");
    FN.setAttribute("name", "FullName");
    FN.setAttribute("placeholder", "Nazwa Rachunku");
    FN.setAttribute("class", "feedback-input");

    let priceElement = document.createElement("input");
    priceElement.setAttribute("type", "number");
    priceElement.setAttribute("name", "price");
    priceElement.setAttribute("placeholder", "Price");
    priceElement.setAttribute("class", "feedback-input");

    let s = document.createElement("input");
    s.setAttribute("type", "button");
    s.setAttribute("value", "Dodaj rachunek");
    s.setAttribute("onclick", "addBillValue()");
    s.setAttribute("class", "sendButton");

    form.appendChild(FN);
    form.appendChild(br.cloneNode());

    form.appendChild(priceElement);
    form.appendChild(br.cloneNode());

    //data
    let date = document.createElement("input");
    date.setAttribute("type", "date");
    date.setAttribute("name", "date");
    date.setAttribute("placeholder", "date");
    date.setAttribute("class", "feedback-input");
    form.appendChild(date);
    form.appendChild(br.cloneNode());
    // let UserList = ["User1","User2","Both"];

    let selectList = document.createElement("select");
    selectList.id = "mySelect";
    selectList.setAttribute("name", "whoPaid");
    selectList.setAttribute("class", "feedback-input");
    form.appendChild(selectList);

    for (let i = 0; i < UserList.length; i++) {
        let option = document.createElement("option");
        option.value = UserList[i];
        option.text = UserList[i];
        selectList.appendChild(option);
    }

    form.appendChild(s);
    document.getElementById("addBill").innerText="";
    document.getElementById("addBill").appendChild(form);




}
addBillValue=()=>{
    let form = document.querySelector('#AddBillForm');
    let name = form.querySelector('input[name="FullName"]').value;
    let price = form.querySelector('input[name="price"]').value;
    let date = form.querySelector('input[name="date"]').value;
    let select = form.querySelector('select[name="whoPaid"]').value;

    let test = new bill(
        name,
        price,
        date,
        select);
    test.listproduct = [];
    bills.push( test );
    createTable();
}
listofelements=(previndex)=>{
    let table = document.createElement('div');

    let row = document.createElement('div');
    row.classList.add("rowList");
    let th1 = document.createElement('div');
    let th2 = document.createElement('div');
    let th3 = document.createElement('div');
    let th4 = document.createElement('div');
    th1.classList.add("cellList");
    th1.classList.add("firstRowColor");
    th2.classList.add("cellList");
    th2.classList.add("firstRowColor");
    th3.classList.add("cellList");
    th3.classList.add("firstRowColor");
    th4.classList.add("cellbuttondell");
    th4.classList.add("firstRowColor");
    th1.appendChild(document.createTextNode('Koszt pozycji'));
    th2.appendChild(document.createTextNode('Kwota płatności'));
    th3.appendChild(document.createTextNode('Kto Płacił'));
    th4.appendChild(document.createTextNode('Edytuj Rachunek'));
    let documentFragment = document.createDocumentFragment();
    documentFragment.appendChild(th1);
    documentFragment.appendChild(th2);
    documentFragment.appendChild(th3);
    documentFragment.appendChild(th4);
    row.appendChild(documentFragment);
    table.appendChild(row);
    for (let index = 0; index < bills[previndex].listproduct.length; ++index) {
        const e = bills[previndex].listproduct[index];


        let row = document.createElement('div');
        row.classList.add("rowList");
        let cell1 = document.createElement('div');
        cell1.classList.add("cellList");
        let cell2 = document.createElement('div');
        cell2.classList.add("cellList");
        let cell21 = document.createElement('div');
        cell21.classList.add("cellList");
        let cell3 = document.createElement('button');
        cell3.classList.add("cellbuttondell");
        let cell4 = document.createElement('div');
        cell4.classList.add("clear");
        cell1.appendChild(document.createTextNode(e[0]));
        cell2.appendChild(document.createTextNode(e[1]+'zł'));
        cell21.appendChild(document.createTextNode(e[2]));
        cell3.appendChild(document.createTextNode('Usuń to'));
        cell3.addEventListener("click", function() {
            // console.log('func + element do usuniecia '+bills[previndex].listproduct[index]);
            bills[previndex].listproduct.splice(index, 1);
            listofelements(previndex);
        });

        let documentFragment = document.createDocumentFragment();
        documentFragment.appendChild(cell1);
        documentFragment.appendChild(cell2);
        documentFragment.appendChild(cell21);
        documentFragment.appendChild(cell3);
        documentFragment.appendChild(cell4);
        row.appendChild(documentFragment);
        table.appendChild(row);

// console.log(e[0]);
// console.log(e[1]);
    }
    // );
    document.getElementById("ListOfProduct").innerText="";
    document.getElementById("ListOfProduct").appendChild(table);
    addElementToList(previndex);
}
addElementToList=(prevIndex)=>{
    let br = document.createElement("br");
    let form = document.createElement("form");
    form.setAttribute("method", "");
    form.setAttribute("id", "addValueTolist");

    let FN = document.createElement("input");
    FN.setAttribute("type", "text");
    FN.setAttribute("name", "FullName");
    FN.setAttribute("placeholder", "New product Name");
    FN.setAttribute("class", "feedback-input");

    let priceElement = document.createElement("input");
    priceElement.setAttribute("type", "number");
    priceElement.setAttribute("name", "price");
    priceElement.setAttribute("placeholder", "Price");
    priceElement.setAttribute("class", "feedback-input");

    let s = document.createElement("input");
    s.setAttribute("type", "button");
    s.setAttribute("value", "Dodaj produkt do listy");
    s.setAttribute("onClick", 'addelement('+prevIndex+')');
    s.setAttribute("class", "sendButton");

    form.appendChild(FN);
    form.appendChild(br.cloneNode());

    form.appendChild(priceElement);
    form.appendChild(br.cloneNode());


    let selectList = document.createElement("select");
    selectList.id = "mySelect";
    selectList.setAttribute("name", "whoPaid");
    form.appendChild(selectList);

    for (let i = 0; i < UserList.length; i++) {
        let option = document.createElement("option");
        option.value = UserList[i];
        option.text = UserList[i];
        selectList.appendChild(option);
    }
    form.appendChild(selectList);
    form.appendChild(s);

    document.getElementById("formtoADDsth").innerText="";
    document.getElementById("formtoADDsth").appendChild(form);
}
addelement=(prevIndex)=>{
    let form =   document.getElementById("addValueTolist");
    let name = form.querySelector('input[name="FullName"]').value;
    let price = form.querySelector('input[name="price"]').value;
    let whoPaid = form.querySelector('select[name="whoPaid"]').value;
    bills[prevIndex].listproduct.push([name,price,whoPaid]);
    listofelements(prevIndex);
}
function removeItemOnce(arr, value) {
    let index = arr.indexOf(value);
    if (index > -1) {
        arr.splice(index, 1);
    }
    return arr;
}
// UserList
checkStatsPerPerson=()=>{
    let br = document.createElement("br");
    let form = document.createElement("form");
    form.setAttribute("method", "");
    form.setAttribute("id", "checkStats");


    let selectList = document.createElement("select");
    selectList.id = "mySelect";
    selectList.setAttribute("name", "whoPaid");
    selectList.setAttribute("class", "feedback-input");
    form.appendChild(selectList);

    for (let i = 0; i < UserList.length-1; i++) {
        let option = document.createElement("option");
        option.value = UserList[i];
        option.text = UserList[i];
        selectList.appendChild(option);
    }

    let s = document.createElement("input");
    s.setAttribute("type", "button");
    s.setAttribute("value", "Check Your \n" +
        "    balance of payments ");
    s.setAttribute("onClick", 'countBill()');
    s.setAttribute("class", "sendButton");
    form.appendChild(selectList);
    form.appendChild(s);

    document.getElementById("checkStats").innerText="";
    document.getElementById("checkStats").appendChild(form);
}
countBill=()=>{
    let form =   document.getElementById("checkStats");
    let whoPaid = form.querySelector('select[name="whoPaid"]').value;
    let yourSum=0;// which you spent on your bills
    let sbSumOnYou=0;// which sb own on your bills
    let sbBoyHisMoney=0;// which sb paid for you on his bills

    for (let index = 0; index < bills.length; ++index) {
        const e = bills[index];
        if(e.whoPaid == whoPaid)
        {
            for(let i=0;i<e.listproduct.length;i++)
            {
                if(e.listproduct[i][2] == whoPaid)
                {
                    let changeToNumber = e.listproduct[i][1]-"";
                    yourSum+=changeToNumber;
                }
                else if((e.listproduct[i][2] == UserList[1] || e.listproduct[i][2] == UserList[0]  ) && e.listproduct[i][2] != whoPaid )
                {
                    let changeToNumber = e.listproduct[i][1]-"";
                    sbSumOnYou+=changeToNumber;
                }
                else if( e.listproduct[i][2] == UserList[2])
                {
                    let changeToNumber = e.listproduct[i][1]-"";
                    yourSum+=changeToNumber/2;
                }

            }

        }
        else if(e.whoPaid != whoPaid && e.whoPaid != UserList[2]) {
            for (let i = 0; i < e.listproduct.length; i++)
            {
                if (e.listproduct[i][2] == whoPaid) {
                    let changeToNumber = e.listproduct[i][1] - "";
                    sbBoyHisMoney += changeToNumber;
                } else if (e.listproduct[i][2] == UserList[2]) {
                    let changeToNumber = e.listproduct[i][1] - "";
                    sbBoyHisMoney += changeToNumber / 2;
                }
            }
        }
    }
    let table = document.createElement('div');
    table.classList.add("table");
    let cell1 = document.createElement('div');
    cell1.classList.add("cellList33");
    let cell2 = document.createElement('div');
    cell2.classList.add("cellList33");
    let cell3 = document.createElement('div');
    cell3.classList.add("cellList33");
    let cell4 = document.createElement('div');
    cell4.classList.add("clear");
    let allMoney;
    allMoney = yourSum-'';
    allMoney += sbBoyHisMoney-'';
    cell1.appendChild(document.createTextNode('W tym okresie wydałeś tyle pięniedzy: '+allMoney + 'zł'));
    cell2.appendChild(document.createTextNode('Tyle pieniedzy ktoś musi ci oddać: '+ sbSumOnYou+ 'zł'));
    cell3.appendChild(document.createTextNode('Tyle piedziedzy ty musisz oddać: '+sbBoyHisMoney+ 'zł'));

    let documentFragment = document.createDocumentFragment();
    documentFragment.appendChild(cell1);
    documentFragment.appendChild(cell2);
    documentFragment.appendChild(cell3);
    table.appendChild(documentFragment);
    document.getElementById("checkStatsResults").innerText="";
    document.getElementById("checkStatsResults").appendChild(table);
}
