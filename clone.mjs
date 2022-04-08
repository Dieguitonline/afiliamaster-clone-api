import scrape from 'website-scraper'; // only as ESM, no CommonJS
import minimist from 'minimist'

const argv = minimist(process.argv.slice(2));
console.log(argv);

const options = {
    urls: [argv.url],
    directory: argv.diretory,
    recursive: false
};

// with async/await
const result = await scrape(options);

// with promise
scrape(options).then((result) => {});

console.log('Importação realizada com sucesso');