// Import the fruitController.js file
const { index, store, update, destroy } = require("./fruitController");

const main = () => {
    index();
    store("Mangga");
    update(0, "Jeruk");
    destroy(0);
};

main();
