const persiapan = () => {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      resolve("Menyiapkan bahan....");
    }, 3000);
  });
};

const rebusAir = () => {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      resolve("Merebus air....");
    }, 7000);
  });
};

const masak = () => {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      resolve("Memasak mie....");
    }, 5000);
  });
};

// consome promise
const main = () => {
  persiapan()
    .then((res) => {
      console.log(res);
      return rebusAir();
    })
    .then((res) => {
      console.log(res);
      return masak();
    })
    .then((res) => {
      console.log(res);
    })
    .catch((err) => {
      console.log(err);
    });
};

// async await
const second = async () => {
  const HasilPersiapan = await persiapan();
  console.log(HasilPersiapan);
  const HasilRebusAir = await rebusAir();
  console.log(HasilRebusAir);
  const HasilMasak = await masak();
  console.log(HasilMasak);
};

second();
