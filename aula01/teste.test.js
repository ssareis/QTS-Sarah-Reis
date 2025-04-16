let a = 'oi be'
let b = 'oi'

Deno.test("Teste do oi (NO API)", () => {
    if (a != "oi be") {
        throw new Error(`${a} oi falso`);
    } else {
        console.log(`${a} oi real`);
    }
}) 

Deno.test("Não pode ser oi (NO API)", () => {
    if (b == "oi") {
        throw new Error(`${b} é oi de gente falsa`);
    } else {
        console.log(`${b} não é oi! entao nao e falso`);
    }
}) 