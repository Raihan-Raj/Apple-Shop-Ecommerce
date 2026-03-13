<script>
async function CartTotal(data){
        let Total=0;
        data.forEach((item,i)=>{
            Total=Total+parseFloat(item['price']);
        })
        $("#total").text(Total);
    }

    async function RemoveCartList(id){
        let res = await axios.get("/DeleteCartList/"+id);
        if(res.status===200){
            await CartItem();
        }else{
            alert("Request Fail")
        }
    } 
    </script>