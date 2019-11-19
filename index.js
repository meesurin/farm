var express = require('express')
var bodyParser = require('body-parser')
var request = require('request')
var app = express()
var mqtt = require('mqtt');
// Your Channel access token (long-lived) 
const CH_ACCESS_TOKEN = 'GfXsrQMKtT6R9Ec7mWiosbDdXjbnqGcBN5FtSqMdUVW2KjE+Mp5RW9R7ItaTw8yOzp5NW9WnfM4UC2L63P16xErf2Ef0gwjBxcafyMbXyFtxEmlMOVk7Ii27AY1CibF2iAky6R7HzGgl5HKfaRT/cgdB04t89/1O/w1cDnyilFU=';
// MQTT Host
var mqtt_host = 'mqtt://tailor.cloudmqtt.com';
// MQTT Topic
var mqtt_topic = '/bannsuanfarm';
// MQTT Config
var options = {
    port: 16822,
    host: 'mqtt://tailor.cloudmqtt.com',
    clientId: 'mqttjs_' + Math.random().toString(16).substr(2, 8),
    username: 'mbnwuffa',
    password: '5MwI26DyDbeg',
    keepalive: 60,
    reconnectPeriod: 1000,
    protocolId: 'MQIsdp',
    protocolVersion: 3,
    clean: true,
    encoding: 'utf8'
};
