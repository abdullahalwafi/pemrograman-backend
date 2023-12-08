const showDownload = (result) => {
    return new Promise((resolve) => {
        setTimeout(() => {
            resolve(`Download selesai\nHasil Download: ${result}`);
        }, 3000);
    });
};

const download = (callShowDownload) => {
    return new Promise((resolve) => {
        setTimeout(() => {
            const result = "windows-10.exe";
            resolve(callShowDownload(result));
        }, 3000);
    });
};

const main = async () => {
    console.log("Download dimulai....");
    console.log(await download(showDownload));
}

main(); 
