const course="Mern Stack";
const age=18;
// const status=""

export function student(){
return (
    <>
    <p>This is student Page</p>
    <h1>Intro</h1>
    <h1>course</h1>
    <p>{"this is" + age}</p>
    <button>{age>19 ? "watch"  : "not watch"}</button>
    </>
  )
}
export const student1=()=>
{
return(
    <p>this is multiple function</p>
)
}
export default student1