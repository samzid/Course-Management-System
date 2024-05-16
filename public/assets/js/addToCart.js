const cartCourseList = document.getElementById('cart_course_list')
const cartCourseTotalCredit = document.getElementById('cart_course_total_credit')


const addCourse = (id, name, credit) => {
    const localData = JSON.parse(localStorage.getItem('grad_school_cart'));
    if (localData === null) {
        const newCourse = { id: id, name: name, credit: credit }
        localStorage.setItem('grad_school_cart', JSON.stringify([newCourse]))
        showCartData()
    }
    else {
        let checkCredit = 0;
        for (let i = 0; i < localData?.length; i++) {
            checkCredit += parseInt(localData[i]?.credit);
        }
        if (checkCredit < 15 && checkCredit + parseInt(credit) <= 15) {
            const found = localData.find((data) => data.id === id)
            if (!found) {
                const newCourse = { id: id, name: name, credit: credit }
                localStorage.setItem('grad_school_cart', JSON.stringify([...localData, newCourse]))
                showCartData()
            }
        }
        else {

        }
    }
}
const showCartData = () => {
    let sum = 0;
    const localData = JSON.parse(localStorage.getItem('grad_school_cart'));
    cartCourseList.innerHTML = ``
    if (localData && localData?.length !== 0) {
        localData.map(course => {
            sum += parseFloat(course.credit);
            const createTr = document.createElement('tr');
            createTr.innerHTML = `
            <td style="width: 30%">${course?.name}</td>
            <td style="width: 10%">${course?.credit}</td>                                   
            <td style="width: 10%;">
                <div class="row g-1">
                    <a style="margin-left:8px" class="btn btn-danger btn-sm" onclick="removeCourse('${course?.name}')">Remove</a>
                </div>
            </td>
                `
            cartCourseList.appendChild(createTr);
        })

        if (sum > 0) {
            cartCourseTotalCredit.innerHTML = ``
            cartCourseTotalCredit.innerHTML = `
            <tr>
            <td></td> 
            <td>Total = ${sum}</td> 
            <td></td> 
          </tr>                                    
            `
        }
    }
    else {
        cartCourseList.innerHTML = `
        <tr>                                  
            <td colspan="3" style="width: 10%" class="text-center">No course selected...</td>                                                                     
        </tr>
        `
        cartCourseTotalCredit.innerHTML = ``
    }
}

showCartData()

const removeCourse = (name) => {
    const localData = JSON.parse(localStorage.getItem('grad_school_cart'));
    if (localData) {
        const filterCourse = localData.filter((data) => data.name !== name)
        localStorage.setItem('grad_school_cart', JSON.stringify(filterCourse))
    }
    showCartData()
}