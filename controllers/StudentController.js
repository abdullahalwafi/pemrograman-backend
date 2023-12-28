class StudentController {
  index(req, res) {
    res.send("menampilkan semua students");
  }

  store(req, res) {
    const { id } = req.params;
    res.send("Menambahkan data student");
  }
  update(req, res) {
    const { id } = req.params;
    res.send(`Mengubah data student id ${id}`);
  }
  destroy(req, res) {
    const { id } = req.params;
    res.send(`Menghapus data student id ${id}`);
  }
}

// membuat object studentcontroller
const object = new StudentController();

// export object student
module.exports = object;
