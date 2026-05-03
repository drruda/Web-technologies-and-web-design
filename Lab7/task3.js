let numberOfRecusrionCalls = 0;

function fibonachiRecursion(numberInRow) {
    numberOfRecusrionCalls++;
    if (numberInRow <= 1) {
        return 1;
    }
    return fibonachiRecursion(numberInRow - 1) + fibonachiRecursion(numberInRow - 2);
}

function createFibonachiMemo() {
    const cache = {};
    let calls = 0;

    return function fib(n) {
        calls++;
        // Оновлення глобальної зміної для виводу кількості викликів мемоізованої функції
        numberOfMemoCalls = calls; 

        if (n <= 1) return 1;
        
        // Перевірка наявності в кеші
        if (n in cache) {
            return cache[n];
        }

        // Обчислення та збереження в кеш
        cache[n] = fib(n - 1) + fib(n - 2);
        return cache[n];
    };
}

let numberOfMemoCalls = 0;
const fibonachiMemo = createFibonachiMemo();

console.log("Рекурсія:", fibonachiRecursion(15), "викликів:", numberOfRecusrionCalls);
console.log("Мемоїзація:", fibonachiMemo(15), "викликів:", numberOfMemoCalls);