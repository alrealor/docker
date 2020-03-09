FROM node:13.8.0-stretch-slim
COPY package.json package.json
RUN npm install
COPY ./app ./app
CMD ["node", "app/server.js"]