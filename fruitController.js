// import data
const fruits = require("./data");

// menampilkan semua data
const index = () => {
  console.log(`Menampilkan semua data`);
  for (const fruit of fruits) {
    console.log(`- ${fruit}`);
  }
};

// menambahkan data
const store = (name) => {
  fruits.push(name);
  console.log(`\nData ${name} berhasil ditambahkan!`);
  index();
};

// mengupdate data
const update = (position, name) => {
    fruits[position] = name;
    console.log(`\nData ${name} berhasil diupdate!`);
    index();
}

// menghapus data
const destroy = (position) => {
    fruits.splice(position, 1);
    console.log(`\nData berhasil dihapus!`);
    index();
}

// export module
module.exports = { index, store, update, destroy };
