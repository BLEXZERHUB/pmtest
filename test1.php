<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>list : <input type="text" name="txt_list" id="txt_list" value="4, 2, 5, 6, 14, 7, 15, 3"></div>
    <div>ค้นหา : <input type="text" name="txt_search" id="txt_search" value="14"> &nbsp;<input type="button" id="btn_search" value="ค้นหา"></div>
    <h3> ประเภทของการค้นหา</h3>
    <div><select id="algor">
            <option value="1">1.Linear Search</option>
            <option value="2">2.Binary Search</option>
            <option value="3">3.Bubble Search</option>
        </select>
    </div>
    <h3> ผลลัพธ์ </h3>
    <textarea id="txt_result" name="txt_result" rows="15" cols="100" style="text-align: center;">
       
    </textarea>


    <script>
        $(document).ready(function() {
            // console.log("ready!");
            // alert('sss')
            $('#btn_search').click(function() {
                $('#txt_result').text("")
                // alert('s')
                let txt_list =  $('#txt_list').val().replace(/\s/g,'') ;
                let txt_search = $('#txt_search').val();
                let algor = $('#algor').val();
                let append = ''
                let res
                let splitArr = txt_list.split(",");
                // alert(splitArr)
                if(algor == 1){
                    res = linearSearch(splitArr, txt_search)
                }else if(algor == 2){
                    var sortedsplitArr = splitArr.sort((a,b) => a-b); 
                    res = binarySearch(sortedsplitArr, txt_search)
                }else if(algor ==3){
                    res = bublesSarch(txt_list,txt_search)
                }


                append = append + "LIST : ["+ txt_list +"]"+"\n";
                append = append + "Search : "  + txt_search+"\n";
                append = append + "Result ::"  +"\n";

                for(let i =0 ;i<res.length;i++){
                    append = append + res[i] +"\n";
                }

                $('#txt_result').append(append);

                // console.log(linearSearch(splitArr, txt_search))
            });

        });

        function linearSearch(arr, elToFind) {
            // console.log(arr)
            let res = []
            let k = 0
            for (var i = 0; i < arr.length; i++) {
                // console.log(arr[i])
                k = k + 1
                if (arr[i].trim() == elToFind) {
                    // return i;
                    res.push("Round : " + k + " ====> " + elToFind + " = " + arr[i] + " found!!")
                    return res;
                } else {
                    res.push("Round : " + k + " ====> " + elToFind + " != " + arr[i] + "")
                }
            }
            // return null;
            res.push(elToFind + " Not found in array ");
            return res;
        }

        function binarySearch(sortedArray, elToFind) {
            let res = []
            let k = 0
            var lowIndex = 0;
            var highIndex = sortedArray.length - 1;
            while (lowIndex <= highIndex) {
                k = k + 1
                var midIndex = Math.floor((lowIndex + highIndex) / 2);
                if (parseFloat(sortedArray[midIndex]) == parseFloat(elToFind)) {
                    // return midIndex;
                    
                    res.push("Round : " + k + " ====> " + elToFind + " = " + sortedArray[midIndex] + " found!!")
                    return res;
                } else if (parseFloat(sortedArray[midIndex]) < parseFloat(elToFind)) {
                    lowIndex = midIndex + 1;
                    res.push("Round : " + k + " ====> " + elToFind + " != " + sortedArray[midIndex] + "")
                } else {
                    highIndex = midIndex - 1;
                    res.push("Round : " + k + " ====> " + elToFind + " != " + sortedArray[midIndex] + "")
                }
            }
            // return null;
            res.push(elToFind + " Not found in array ");
            return res;
        }

        function bublesSarch(txt_list,txt_search){
            let res = []
            res.push("Bubble Search is not Algorithm in search find in Sort Algorithm")
            return res;
        }
    </script>
</body>



</html>